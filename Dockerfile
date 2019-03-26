FROM php:7.2.16-apache

#RUN apt-get update && \
#    apt-get install -y curl && \
#    apt-get install -y vim

RUN a2enmod rewrite

EXPOSE 80

ADD ./dockerconf/000-default.conf /etc/apache2/sites-enabled/000-default.conf

RUN service apache2 restart