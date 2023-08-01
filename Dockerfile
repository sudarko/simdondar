From cespi/php-5.3:apache
ENV TZ=Asia/Jakarta
# Setup GD extension
RUN apk update && apk add --no-cache \
      freetype \
      libjpeg-turbo \
      libpng \
      freetype-dev \
      libjpeg-turbo-dev \
      libpng-dev \
      coreutils \
    && docker-php-ext-configure gd \
      --with-freetype=/usr/include/ \
      --with-jpeg=/usr/include/ \
    && docker-php-ext-install -j$(nproc) gd \
    && docker-php-ext-enable gd \
    && apk del --no-cache \
      freetype-dev \
      libjpeg-turbo-dev \
      libpng-dev \
    && rm -rf /tmp/*

RUN apk add libzip-dev

RUN docker-php-ext-install mysqli pdo pdo_mysql \
     && docker-php-ext-enable pdo_mysql
#RUN docker-php-ext-install mysqli pdo pdo_mysql
#RUN apk update
#RUN apk add php5-mysql php5-mysqli php5-pdo_mysql
ADD code /var/www/html/
