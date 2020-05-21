FROM webdevops/php-apache:7.4

RUN mkdir /var/www/public
COPY apache/g4m.conf /opt/docker/etc/httpd/vhost.common.d/g4m.conf

WORKDIR /var/www
