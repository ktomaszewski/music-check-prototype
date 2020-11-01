FROM php:7.4-fpm

RUN rm -f /etc/localtime && ln -sf /usr/share/zoneinfo/UTC /etc/localtime

RUN apt-get update
RUN apt-get install -y curl git wget zip unzip libicu-dev libzip-dev libpq-dev

RUN pecl install xdebug && docker-php-ext-enable xdebug
RUN docker-php-ext-install opcache
RUN docker-php-ext-configure intl && docker-php-ext-install intl
RUN docker-php-ext-install zip
RUN docker-php-ext-install pdo pdo_pgsql

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN wget https://get.symfony.com/cli/installer -O - | bash && mv ~/.symfony/bin/symfony /usr/local/bin/symfony
