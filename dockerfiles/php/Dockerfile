# Накатываем образ из Docker Hub
FROM php:8.1.10-fpm
# Добавляем расширение mysqli в php
RUN apt-get update && apt-get install -y \
        libfreetype6-dev \
        libpng-dev \
        libmcrypt-dev \
        libzip-dev \
        libjpeg62-turbo-dev

RUN docker-php-ext-install mysqli \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd \
    && docker-php-ext-install -j$(nproc) iconv  \
    && docker-php-ext-install -j$(nproc) zip


