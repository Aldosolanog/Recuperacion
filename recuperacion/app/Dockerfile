FROM php:8.0.11-apache
RUN apt-get update

RUN docker-php-ext-install mysqli pdo pdo_mysql

COPY ./crud /var/www/html

CMD /usr/sbin/apache2ctl -D FOREGROUND

EXPOSE 80