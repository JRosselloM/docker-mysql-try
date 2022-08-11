FROM php:7.3-apache

RUN apt-get update && apt-get upgrade -y
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

COPY ./docker/php.ini /usr/local/etc/php/php.ini

EXPOSE 80