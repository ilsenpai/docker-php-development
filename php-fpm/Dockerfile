FROM php:7.1-fpm

RUN apt-get update && apt-get install -y wget git zip unzip

RUN docker-php-ext-install pdo pdo_mysql

WORKDIR /var/www/app

CMD php-fpm -F
