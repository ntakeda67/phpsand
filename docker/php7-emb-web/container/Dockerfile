FROM php:7.2-alpine

# setup composer
ENV COMPOSER_HOME /tmp
COPY --from=composer:1.7.2 /usr/bin/composer /usr/bin/composer

# custom conf
COPY ./conf/php.ini $PHP_INI_DIR/

# xdebuger
RUN apk --no-cache add autoconf build-base
RUN pecl install xdebug && docker-php-ext-enable xdebug

# set cwd app-root
WORKDIR /root/app