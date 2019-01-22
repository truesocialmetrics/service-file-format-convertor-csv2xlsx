FROM php:7-cli

MAINTAINER Rostislav Mykhajliw <necromant2005@gmail.com>

RUN apt update \
    && apt install -y libzip-dev \
    && pecl install zip \
    && echo "extension=zip.so" > /usr/local/etc/php/conf.d/zip.ini


RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"  \
    && php composer-setup.php \
    && rm composer-setup.php \
    && mv composer.phar /bin/composer

RUN php -r "copy('https://phar.phpunit.de/phpunit-7.phar', 'phpunit.phar');" \
    && chmod +x phpunit.phar \
    && mv phpunit.phar /bin/phpunit

CMD ["/bin/bash"]
