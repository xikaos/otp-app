FROM ambientum/php:7.2
COPY config/www.conf /etc/php7/php-fpm.d/www.conf
COPY config/php.ini /etc/php7/php.ini
ENTRYPOINT ["php", "artisan", "serve", "--host", "0.0.0.0", "--port", "9090"]
