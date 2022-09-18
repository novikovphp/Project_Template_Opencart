<?php
namespace Opencart\Admin\Controller\Extension\Googleanalytics\Analytics;
use \Opencart\System\Helper AS Helper;
class Google extends \Opencart\System\Engine\Controller {

    private $eName      = 'analytics_google';
    private $ePath      = 'extension/googleanalytics/analytics/google';
    private $eVersion   = '1.0.3';

    public function index(): void {
        $this->load->language($this->ePath);

        if ($this->language->get('text_title') == 'text_title') {
            $this->load->language($this->ePath, '', 'en-gb');
        }

        $this->document->setTitle($this->language->get('text_title'));

        $data['e_version'] = $this->eVersion;
        $data['author_name'] = base64_decode('VmFuU3R1ZGlv');
        $data['author_link'] = base64_decode('aHR0cHM6Ly92YW5zdHVkaW8uY28udWE=');
        $data['support_link'] = html_entity_decode($data['author_link'] . '/support-request?extension_id=44068&oc=' . VERSION . '&e_version=' . $this->eVersion . '&site=' . urlencode(HTTP_CATALOG) . '&email=' . urlencode($this->config->get('config_email')), ENT_QUOTES, 'UTF-8');

        if (isset($this->request->get['store_id'])) {
            $store_id = $this->request->get['store_id'];
        } else {
            $store_id = 0;
        }

        $data['breadcrumbs'] = [];

        $data['breadcrumbs'][] = [
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'])
        ];

        $data['breadcrumbs'][] = [
            'text' => $this->language->get('text_extension'),
            'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=analytics')
        ];

        $data['breadcrumbs'][] = [
            'text' => $this->language->get('text_title'),
            'href' => $this->url->link($this->ePath, 'user_token=' . $this->session->data['user_token'] . '&store_id=' . $store_id)
        ];

        $data['save'] = $this->url->link($this->ePath . '|save', 'user_token=' . $this->session->data['user_token'] . '&store_id=' . $store_id);
        $data['back'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=analytics');

        $this->load->model('setting/setting');

        $analytics_google_settings = $this->model_setting_setting->getSetting($this->eName, $store_id);

        foreach ($analytics_google_settings as $key => $value) {
            $data[$key] = $value;
        }

        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view($this->ePath, $data));
    }

    public function save(): void {
        $this->load->language($this->ePath);

        $json = [];

        if (!$this->user->hasPermission('modify', $this->ePath)) {
            $json['error'] = $this->language->get('error_permission');
        }

        if (isset($this->request->post['analytics_google_status'])) {
            $this->request->post['analytics_google_status'] = 1;
        } else {
            $this->request->post['analytics_google_status'] = 0;
        }

        if ($this->request->post['analytics_google_status']) {
            switch ($this->request->post['analytics_google_type']) {
                case 0:
                    if ($this->getStrLen(trim($this->request->post['analytics_google_measurement_id'])) < 1) {
                        $json['error']['measurement-id'] = $this->language->get('error_measurement_id');
                    }
                    break;
                case 1:
                    if ($this->getStrLen(trim($this->request->post['analytics_google_tracking_id'])) < 1) {
                        $json['error']['tracking-id'] = $this->language->get('error_tracking_id');
                    }
                    break;
                case 2:
                    if ($this->getStrLen(trim($this->request->post['analytics_google_code'])) < 1) {
                        $json['error']['code'] = $this->language->get('error_code');
                    }
                    break;
            }
        }

        if (!$json) {
            $this->load->model('setting/setting');

            if (isset($this->request->get['store_id'])) {
                $store_id = $this->request->get['store_id'];
            } else {
                $store_id = 0;
            }

            $this->model_setting_setting->editSetting($this->eName, $this->request->post, $store_id);

            $json['success'] = $this->language->get('text_success');
        }

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }

    public function install(): void {
        $this->load->model('setting/event');

        $events = [
            [
                'code' => $this->eName,
                'description' => '',
                'trigger' => 'admin/language/' . $this->ePath . '/before',
                'action' => $this->ePath . '|language',
                'status' => 1,
                'sort_order' => 1,
            ],
        ];

        if (substr(VERSION, 0, 7) < '4.0.1.0') {
            foreach ($events as $event) {
                $this->model_setting_event->addEvent($event['code'], $event['description'], $event['trigger'], $event['action'], $event['status'], $event['sort_order']);
            }
        } else {
            foreach ($events as $event) {
                $this->model_setting_event->addEvent($event);
            }
        }
    }

    public function uninstall(): void {
        $this->load->model('setting/event');

        $this->model_setting_event->deleteEventByCode($this->eName);
    }

    public function language(string &$route, string &$prefix, string &$code): void {
        if (!file_exists(DIR_EXTENSION . 'googleanalytics/admin/language/' . $this->config->get('config_language_admin'))) {
            $code = 'en-gb';
        }
    }

    public function getStrLen($value): string {
        if (substr(VERSION, 0, 7) < '4.0.1.0') {
            return utf8_strlen($value);
        } else {
            return Helper\Utf8\strlen($value);
        }
    }
}