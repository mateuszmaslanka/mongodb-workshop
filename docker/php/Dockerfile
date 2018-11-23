FROM php:7.2-apache

RUN apt-get update && apt-get install -y autoconf pkg-config libssl-dev zlib1g-dev git zip \
    && docker-php-ext-install zip

RUN pecl install mongodb \
    && docker-php-ext-enable mongodb

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
