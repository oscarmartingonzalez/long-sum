
FROM php:7.3-fpm-alpine

MAINTAINER OSCAR MARTIN "oscar@omartin.es"

ENV REFRESHED_AT 2019-08-21

RUN apk --no-cache add curl
RUN curl -sS https://getcomposer.org/installer | php; mv composer.phar /usr/local/bin/composer
ARG APP_DIR
ENV APP_DIR ${APP_DIR}
ENV PATH ${PATH}:${APP_DIR}/vendor/bin

COPY custom-php.ini /usr/local/etc/php/conf.d/

WORKDIR ${APP_DIR}
