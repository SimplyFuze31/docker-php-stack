FROM php:8.2.3-fpm-alpine
RUN apk add curl git build-base zlib-dev oniguruma-dev autoconf bash
RUN docker-php-ext-install pdo_mysql
# Configure non-root user.
ARG PUID=1000
ARG PGID=1000
RUN apk --no-cache add shadow && \
    groupmod -o -g ${PGID} www-data && \
    usermod -o -u ${PUID} -g www-data www-data

# Source code
RUN chown www-data:www-data /var/www
COPY --chown=www-data:www-data ./ /var/www
WORKDIR /var/www

USER www-data
COPY --from=composer/composer:latest-bin /composer /usr/bin/composer
