From cespi/php-5.3:apache
RUN apk update
RUN apk add php5-mysql php5-mysqli php5-pdo_mysql
ADD code /var/www/html/
