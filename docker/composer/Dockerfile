FROM php:7.2-cli

RUN apt-get update && apt-get install -y zlib1g-dev git zip \
    && docker-php-ext-install zip

RUN pecl install mongodb \
    && docker-php-ext-enable mongodb

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN mkdir -p /.composer
RUN chown -R 1000:1000 /.composer

WORKDIR /app
