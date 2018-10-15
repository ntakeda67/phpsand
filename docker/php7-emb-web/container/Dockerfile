FROM php:7.2-alpine

# setup composer
# Composer
ENV COMPOSER_HOME /tmp
COPY --from=composer:1.7.2 /usr/bin/composer /usr/bin/composer

WORKDIR /root/app