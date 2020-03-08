FROM php:7.4-fpm-alpine3.10

RUN apk --update add --no-cache \
    ${PHPIZE_DEPS} \
    oniguruma-dev \
    libpng-dev \
    openssl-dev \
    nginx \
    supervisor \
    gd \
    nano \
    libxml2-dev \
    git \
    iputils \
    && rm -rf /var/cache/apk/*

RUN docker-php-ext-install \
        mysqli \
        pdo_mysql \
        mbstring \
        gd \
        soap \
        xml \
        posix \
        tokenizer \
        ctype \
        pcntl \
        opcache

RUN chmod -R 755 /usr/local/lib/php/extensions/

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin --filename=composer \
    && chown -R www-data:www-data /var/lib/nginx \
    && chown -R www-data:www-data /var/tmp/nginx \
    && mkdir -p /app \
    && chown -R www-data:www-data /app

WORKDIR /var/www

RUN rm -rf /var/www/html

RUN ln -s public html

EXPOSE 9000

ENTRYPOINT ["php-fpm"]