FROM php:8.2-fpm-bullseye as app-base

RUN apt-get update && apt-get install -y git libpq-dev libzip-dev unzip
RUN docker-php-ext-install pdo pdo_pgsql

RUN docker-php-ext-install opcache zip sysvsem

COPY --from=composer:2.4.4 /usr/bin/composer /usr/bin/composer

WORKDIR /home/app
