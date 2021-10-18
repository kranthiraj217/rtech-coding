Filename-Dockerfile-Custom

1) docker build my-php-app .

2) docker run -it --rm --name my-running-app my-php-app

3) docker run -d -p 8080:80 --name my-apache-app -v "$PWD":/var/www/html php:7.2-apache

4) for output : in browser- localhost:8080 

   *********Thank You**********