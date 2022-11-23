FROM php:8.1-fpm-alpine

RUN apk update \
    && apk upgrade \
    && apk add --no-cache \
        freetype \
        libpng \
        libjpeg-turbo \
        freetype-dev \
        libpng-dev \
        jpeg-dev \
        libjpeg \
        libzip-dev \
        libjpeg-turbo-dev \
        zlib \
        unzip \
        npm
# Install PHP extensions
RUN docker-php-ext-install mysqli pdo pdo_mysql gd bcmath zip

RUN deluser www-data &&\
    if getent group www-data ; then delgroup www-data; fi &&\
    addgroup -g 1000 www-data &&\
    adduser -u 1000 -G www-data www-data --disabled-password &&\
    install -d -m 0755 -o www-data -g www-data /home/www-data

RUN curl -sS https://getcomposer.org/installer -o composer-setup.php
RUN php composer-setup.php --install-dir=/usr/local/bin --filename=composer
RUN rm -rf composer-setup.php

COPY ./docker/php/php.ini /usr/local/etc/php/php.ini
COPY . /app

RUN chown -R www-data:www-data /app

USER www-data

EXPOSE 9000
CMD ["php-fpm"]

USER root
