FROM php:8.1-fpm

RUN rm /etc/apt/preferences.d/no-debian-php; \
    apt-get update -yqq; \
    apt install -y zlib1g-dev g++ git libicu-dev libzip-dev zip libpq-dev libpng-dev libxml2-dev  libc-client-dev libkrb5-dev libssh2-1-dev libssh2-1 \
    && pecl install ssh2-1.3.1 xdebug \
    && docker-php-ext-install  zip pdo pdo_mysql mysqli gd \
    && docker-php-ext-enable ssh2 xdebug \
    && docker-php-ext-configure zip \
    && docker-php-ext-configure imap --with-kerberos --with-imap-ssl && docker-php-ext-install -j$(nproc) imap \
    && apt install -y libreoffice --no-install-recommends \
    && apt install -y default-jre

ENV TZ=Europe/Paris
RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone

WORKDIR /var/www/librairie_digital

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer