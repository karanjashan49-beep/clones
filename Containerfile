FROM amazonlinux:latest

RUN yum install -y httpd zip unzip && yum clean all

WORKDIR /var/www/html
COPY ./code/* /var/www/html 
ADD https://templated.live/urban/download/urban.zip
RUN unzip urban.zip 
echo "This is template file" >> /var/www/html/index.html
EXPOSE 89

CMD ["/usr/sbin/httpd", "-D", "FOREGROUND"]
