FROM php:7.2.1-fpm

RUN apt-get update && apt-get install -y libmcrypt-dev \
    mysql-client libmagickwand-dev --no-install-recommends \
    && pecl install imagick \
    && docker-php-ext-enable imagick \
    && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
    && docker-php-ext-install -j$(nproc) gd \
    && docker-php-ext-install pdo_mysql \
    && openssl 

# Memory Limit
RUN echo "memory_limit = -1" > $PHP_INI_DIR/conf.d/memory-limit.ini
RUN echo "upload_max_filesize = 999M" > $PHP_INI_DIR/conf.d/max-file-size.ini
RUN echo "post_max_size = 999M" > $PHP_INI_DIR/conf.d/post-max-size.ini

RUN echo "always_populate_raw_post_data=-1" > $PHP_INI_DIR/conf.d/always_populate_raw_post_data.ini    

RUN apt-get -y install nano

RUN apt-get -y install -qq --force-yes cron
RUN (crontab -l ; echo "* * * * * /usr/local/bin/php /usr/share/nginx/server/artisan schedule:run 1>> /dev/null 2>&1") | crontab
RUN (crontab -l ; echo "# An empty line is required at the end of this file for a valid cron file.") | crontab
RUN service cron start
ENV PATH "/composer/vendor/bin:$PATH"
ENV COMPOSER_ALLOW_SUPERUSER 1
ENV COMPOSER_HOME /composer

RUN cd ~ \
 && php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
 && php -r "if (hash_file('SHA384', 'composer-setup.php') === '93b54496392c062774670ac18b134c3b3a95e5a5e5c8f1a9f115f203b75bf9a129d5daa8ba6a13e2cc8a1da0806388a8') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;" \
 && php composer-setup.php --install-dir=/usr/local/bin/ --filename=composer \
 && php -r "unlink('composer-setup.php');" 



