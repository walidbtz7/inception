FROM debian:bullseye

RUN apt-get update && apt-get upgrade -y

RUN apt-get install -y nginx

COPY conf/nginx.conf /etc/nginx/conf.d/default.conf

COPY conf/ssl/ /etc/nginx/

RUN rm /etc/nginx/sites-enabled/default

EXPOSE 443

CMD ["nginx", "-g", "daemon off;", "-c", "/etc/nginx/nginx.conf"]
