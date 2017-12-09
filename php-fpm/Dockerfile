FROM php:7.1-fpm

RUN docker-php-ext-install mysqli

WORKDIR /var/www/app

CMD php-fpm -F
