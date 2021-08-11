FROM php:8.0-apache
COPY index.php /var/www/html/index.php
COPY remoteip.load /etc/apache2/mods-enabled/remoteip.load
COPY remoteip.conf /etc/apache2/conf-enabled/remoteip.conf
RUN chmod a+rx index.php
