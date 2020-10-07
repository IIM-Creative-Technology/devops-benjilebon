FROM php:7.3-fpm
ARG ENABLE_XDEBUG_CONNECT_BACK=1
ADD https://raw.githubusercontent.com/mlocati/docker-php-extension-installer/master/install-php-extensions /usr/local/bin/

RUN chmod uga+x /usr/local/bin/install-php-extensions && sync && \
    install-php-extensions xdebug mbstring dom gd pdo_mysql curl soap zip apcu

RUN curl -sS https://getcomposer.org/installer | php -- --version=1.10.8 --install-dir=/usr/local/bin --filename=composer