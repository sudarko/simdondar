From cespi/php-5.3:apache
ENV TZ=Europe/Bratislava

RUN apk update \
     && docker-php-ext-install mysqli pdo pdo_mysql \
     && docker-php-ext-enable pdo_mysql
#RUN docker-php-ext-install mysqli pdo pdo_mysql
#RUN apk update
#RUN apk add php5-mysql php5-mysqli php5-pdo_mysql
ADD code /var/www/html/
