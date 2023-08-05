FROM debian:buster

RUN apt-get update && apt-get upgrade -y

RUN apt-get install -y nginx

COPY conf/nginx.conf /etc/nginx/server.conf

COPY conf/ssl/certificate.crt /etc/nginx/server.crt
COPY conf/ssl/private.key /etc/nginx/server.key

RUN rm /etc/nginx/sites-enabled/default

EXPOSE 443

CMD ["nginx", "-g", "daemon off;", "-c", "/etc/nginx/nginx.conf"]
