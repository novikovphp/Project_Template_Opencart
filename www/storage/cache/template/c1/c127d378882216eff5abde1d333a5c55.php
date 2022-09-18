<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* extension/googleanalytics/admin/view/template/analytics/google.twig */
class __TwigTemplate_b62227c421e40a374d424a71b4c12693 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo ($context["header"] ?? null);
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"float-end\">
        <button type=\"submit\" form=\"form-analytics\" data-bs-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-outline-primary\"><i class=\"fas fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["back"] ?? null);
        echo "\" data-bs-toggle=\"tooltip\" title=\"";
        echo ($context["button_back"] ?? null);
        echo "\" class=\"btn btn-outline-secondary\"><i class=\"fas fa-reply\"></i></a>
        <a href=\"";
        // line 8
        echo ($context["support_link"] ?? null);
        echo "\" target=\"_blank\" data-bs-toggle=\"tooltip\" title=\"";
        echo ($context["button_support"] ?? null);
        echo "\" class=\"btn btn-outline-warning\"><i class=\"fas fa-life-ring\"></i></a>
      </div>
    <h1>
        ";
        // line 11
        echo ($context["text_title"] ?? null);
        echo "
        <div class=\"e-version\" style=\"font-size: 12px;float: right;\">v";
        // line 12
        echo ($context["e_version"] ?? null);
        echo "</div>
        <div class=\"e-author\" style=\"position: absolute;font-size: 12px;\"><a href=\"";
        // line 13
        echo ($context["author_link"] ?? null);
        echo "\" target=\"_blank\">by ";
        echo ($context["author_name"] ?? null);
        echo "</a></div>
      </h1>
      <ol class=\"breadcrumb\">
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 17
            echo "          <li class=\"breadcrumb-item\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 17);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 17);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fas fa-pencil-alt\"></i> ";
        // line 24
        echo ($context["text_edit"] ?? null);
        echo "</div>
      <div class=\"card-body\">
        <div class=\"alert alert-info\" role=\"alert\"><i class=\"fa fa-info-circle\"></i> ";
        // line 26
        echo ($context["text_set_up_ga"] ?? null);
        echo "
          <button type=\"button\" class=\"btn-close float-end\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
          <span class=\"float-end\"><i class=\"fas fa-chart-line\"></i> ";
        // line 28
        echo ($context["text_ecommerce"] ?? null);
        echo "&nbsp;&nbsp;&nbsp;</span>
        </div>
        <form id=\"form-analytics\" action=\"";
        // line 30
        echo ($context["save"] ?? null);
        echo "\" method=\"post\" data-oc-toggle=\"ajax\">
          <div class=\"row mb-3\">
            <label for=\"checkbox-status\" class=\"col-sm-2 col-form-label\">";
        // line 32
        echo ($context["entry_status"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <div class=\"form-check form-switch form-switch-lg\">
                <input name=\"analytics_google_status\" value=\"1\" class=\"form-check-input\" type=\"checkbox\" id=\"checkbox-status\" ";
        // line 35
        if (($context["analytics_google_status"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo ">
              </div>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label for=\"radio-type0\" class=\"col-sm-2 col-form-label\"></label>
            <div class=\"col-sm-10\">
              <div class=\"btn-group\" role=\"group\" aria-label=\"\">
                <input type=\"radio\" class=\"btn-check\" value=\"0\" name=\"analytics_google_type\" id=\"radio-type-0\" autocomplete=\"off\" ";
        // line 43
        if (((null === ($context["analytics_google_type"] ?? null)) || (($context["analytics_google_type"] ?? null) == 0))) {
            echo "checked=\"checked\"";
        }
        echo ">
                <label class=\"btn btn-outline-primary\" for=\"radio-type-0\">";
        // line 44
        echo ($context["text_measurement_id"] ?? null);
        echo "</label>
                <input type=\"radio\" class=\"btn-check\" value=\"1\" name=\"analytics_google_type\" id=\"radio-type-1\" autocomplete=\"off\" ";
        // line 45
        if ((($context["analytics_google_type"] ?? null) == 1)) {
            echo "checked=\"checked\"";
        }
        echo ">
                <label class=\"btn btn-outline-primary\" for=\"radio-type-1\">";
        // line 46
        echo ($context["text_tracking_id"] ?? null);
        echo "</label>
                <input type=\"radio\" class=\"btn-check\" value=\"2\" name=\"analytics_google_type\" id=\"radio-type-2\" autocomplete=\"off\" ";
        // line 47
        if ((($context["analytics_google_type"] ?? null) == 2)) {
            echo "checked=\"checked\"";
        }
        echo ">
                <label class=\"btn btn-outline-primary\" for=\"radio-type-2\">";
        // line 48
        echo ($context["text_code"] ?? null);
        echo "</label>
              </div>
            </div>
          </div>
          <div class=\"group-type-0 row mb-3\" style=\"display: ";
        // line 52
        if (((null === ($context["analytics_google_type"] ?? null)) || (($context["analytics_google_type"] ?? null) == 0))) {
            echo "flex";
        } else {
            echo "none";
        }
        echo ";\">
            <label for=\"input-measurement-id\" class=\"col-sm-2 col-form-label\">";
        // line 53
        echo ($context["entry_measurement_id"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"analytics_google_measurement_id\" value=\"";
        // line 55
        echo ($context["analytics_google_measurement_id"] ?? null);
        echo "\" placeholder=\"G-XXXXXXXXXX\" id=\"input-measurement-id\" class=\"form-control\"/>
              <div class=\"form-text\">";
        // line 56
        echo ($context["note_measurement_id"] ?? null);
        echo "</div>
              <div id=\"error-measurement-id\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"group-type-1 row mb-3\" style=\"display: ";
        // line 60
        if ((($context["analytics_google_type"] ?? null) == 1)) {
            echo "flex";
        } else {
            echo "none";
        }
        echo ";\">
            <label for=\"input-tracking-id\" class=\"col-sm-2 col-form-label\">";
        // line 61
        echo ($context["entry_tracking_id"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"analytics_google_tracking_id\" value=\"";
        // line 63
        echo ($context["analytics_google_tracking_id"] ?? null);
        echo "\" placeholder=\"UA-XXXXXXXX-X\" id=\"input-tracking-id\" class=\"form-control\"/>
              <div class=\"form-text\">";
        // line 64
        echo ($context["note_tracking_id"] ?? null);
        echo "</div>
              <div id=\"error-tracking-id\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"group-type-2 row mb-3\" style=\"display: ";
        // line 68
        if ((($context["analytics_google_type"] ?? null) == 2)) {
            echo "flex";
        } else {
            echo "none";
        }
        echo ";\">
            <label for=\"input-code\" class=\"col-sm-2 col-form-label\">";
        // line 69
        echo ($context["entry_code"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <textarea name=\"analytics_google_code\" rows=\"9\" placeholder=\"";
        // line 71
        echo ($context["entry_code"] ?? null);
        echo "\" id=\"input-code\" class=\"form-control\">";
        echo ($context["analytics_google_code"] ?? null);
        echo "</textarea>
              <div id=\"error-tracking-id\"  class=\"invalid-feedback\"></div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<script>
    \$(document).on('click', 'input[name=\\'analytics_google_type\\']', function (e) {
        \$('div[class^=\\'group-type-\\']').hide();
        \$('.group-type-' + \$(this).val()).show();
    });
    \$(document).on('change', 'input[name=\\'analytics_google_status\\']', function (e) {
        if (\$(this).is(':checked')) {
            \$(this).attr('checked', true);
        } else {
            \$(this).attr('checked', false);
        }
    });
</script>
<style>
  .form-switch .form-check-input {
    cursor: pointer;
  }
  .form-switch .form-check-input:checked {
    background-color: #32cd32;
    border-color: #32cd32;
  }
</style>
";
        // line 102
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/googleanalytics/admin/view/template/analytics/google.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  271 => 102,  235 => 71,  230 => 69,  222 => 68,  215 => 64,  211 => 63,  206 => 61,  198 => 60,  191 => 56,  187 => 55,  182 => 53,  174 => 52,  167 => 48,  161 => 47,  157 => 46,  151 => 45,  147 => 44,  141 => 43,  128 => 35,  122 => 32,  117 => 30,  112 => 28,  107 => 26,  102 => 24,  95 => 19,  84 => 17,  80 => 16,  72 => 13,  68 => 12,  64 => 11,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/googleanalytics/admin/view/template/analytics/google.twig", "/var/www/html/extension/googleanalytics/admin/view/template/analytics/google.twig");
    }
}
