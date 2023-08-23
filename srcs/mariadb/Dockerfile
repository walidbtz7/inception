FROM debian:bullseye

RUN apt-get update && apt-get install -y mariadb-server sudo

RUN sed -i 's/bind-address            = 127.0.0.1/bind-address = 0.0.0.0/' /etc/mysql/mariadb.conf.d/50-server.cnf

COPY mariadb_setup.sh /mariadb_setup.sh

RUN chmod +x /mariadb_setup.sh

CMD ["./mariadb_setup.sh"]