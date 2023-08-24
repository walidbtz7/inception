FROM debian:bullseye

RUN apt-get update && apt-get install -y mariadb-server sudo

ARG MYSQL_DATABASE MYSQL_USER MYSQL_PASSWORD MYSQL_ROOT_PASSWORD

RUN sed -i 's/bind-address            = 127.0.0.1/bind-address = 0.0.0.0/' /etc/mysql/mariadb.conf.d/50-server.cnf

COPY mariadb_setup.sh /mariadb_setup.sh

RUN chmod +x /mariadb_setup.sh

RUN ./mariadb_setup.sh

CMD ["mariadbd"]