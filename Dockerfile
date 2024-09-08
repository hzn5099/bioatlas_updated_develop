FROM php:8.2-apache
RUN mkdir -p /data/php/bioatlas/bioatlas/zfatlasDump
WORKDIR /data/php/bioatlas/bioatlas
COPY ./docker_config/docker-http.conf /etc/apache2/sites-available/bioatlas.conf
COPY ./docker_config/docker-uploads.ini /usr/local/etc/php/conf.d/uploads.ini 
RUN cp /usr/local/etc/php/php.ini-development /usr/local/etc/php/php.ini \
    && cat /usr/local/etc/php/conf.d/uploads.ini > /usr/local/etc/php/php.ini \
    && apt-get update && apt-get install -y \
    && apt-get install libvips-tools libvips-dev imagemagick libimage-magick-perl libparallel-forkmanager-perl libpng-tools libpng-dev libjpeg-tools libjpeg-dev libtiff-dev libtiff-tools libmagickwand-dev libmagickcore-dev -y \
    && docker-php-ext-configure gd --enable-gd --with-freetype --with-jpeg --with-webp \
    && docker-php-ext-install gd pdo pdo_mysql mysqli \
    && docker-php-ext-enable pdo pdo_mysql mysqli \
    && pecl install imagick vips \
    && a2ensite bioatlas \
    && rm -Rf /var/www/html \
    && ln -s /data/php/bioatlas/bioatlas/zfatlasDump/labels /var/www/html
EXPOSE 80