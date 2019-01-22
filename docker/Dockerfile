FROM php:7-cli-alpine

MAINTAINER Rostislav Mykhajliw <necromant2005@gmail.com>

RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"  \
    && php composer-setup.php \
    && rm composer-setup.php \
    && mv composer.phar /bin/composer

RUN composer global require phpunit/phpunit \
    && ln -s /root/.composer/vendor/bin/phpunit /bin/phpunit

CMD ["/bin/bash"]
