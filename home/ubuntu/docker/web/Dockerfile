FROM php:8.2-apache

RUN apt update \
 && apt install -y \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    openssl \
    libssl-dev \
    vim \
    zip \
    unzip

# node と npm をインストール
RUN apt-get install -y gnupg
RUN curl -fsSL https://deb.nodesource.com/setup_18.x | bash -\
 && apt-get install -y nodejs\
 && npm install npm@8.12.1 --global

# install-php-extensions をインストール
ADD https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/
RUN chmod +x /usr/local/bin/install-php-extensions

# PHP のエクステンションをインストール
RUN install-php-extensions opcache intl gd exif imagick mysqli pdo_mysql mbstring curl xml bcmath redis xdebug

ENV COMPOSER_ALLOW_SUPERUSER 1
ENV COMPOSER_NO_INTERACTION 1

RUN curl -sS https://getcomposer.org/installer | php
RUN mv composer.phar /usr/local/bin/composer

# Lalavel 10をインストール
RUN composer global require laravel/installer

# Sentry SDKをインストール
RUN composer require sentry/sentry-laravel

RUN cd /etc/apache2/mods-enabled/ \
 && ln -s ../mods-available/rewrite.load rewrite.load \
 && ln -s ../mods-available/include.load include.load

RUN groupadd -g 1000 ubuntu && useradd -u 1000 -s /sbin/nologin -M -g ubuntu ubuntu
ENV APACHE_RUN_USER ubuntu
ENV APACHE_RUN_GROUP ubuntu

WORKDIR /var/www/html
