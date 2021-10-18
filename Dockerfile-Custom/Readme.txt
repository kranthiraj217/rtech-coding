Filename-Dockerfile-Custom

 Commands to build the dockerfile:
1) docker build my-php-app .
2) docker run -it --rm --name my-running-app my-php-app

Command to run the dockerfile :
3) docker run -d -p 8080:80 --name my-apache-app -v "$PWD":/var/www/html php:7.2-apache

4) for output navigate to localhost:8080 

   