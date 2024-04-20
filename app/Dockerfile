FROM php:5.6-apache
RUN docker-php-ext-install mysqli pdo pdo_mysql && docker-php-ext-enable pdo_mysql
RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"
RUN a2enmod rewrite
COPY . /var/www/html
RUN mkdir /var/www/html/application/sessions
RUN chmod 0700 /var/www/html/application/sessions 
RUN chown www-data /var/www/html/application/sessions
USER www-data
