FROM php:8-cli

RUN apt-get update && apt-get install -y \
    libzip-dev zip \
    && docker-php-ext-install zip sockets

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer
