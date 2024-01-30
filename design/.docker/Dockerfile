FROM php:7.2-apache

COPY apache/000-default.conf /etc/apache2/sites-available/000-default.conf

COPY php/php.ini /usr/local/etc/php/php.ini

RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"

RUN chown -R www-data:www-data /srv/app \
    && a2enmod rewrite