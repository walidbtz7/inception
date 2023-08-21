# Use the debian buster image
FROM debian:bullseye

RUN apt-get update && apt-get install -y mariadb-server

COPY mariadb_setup.sh /mariadb_setup.sh

RUN chmod +x /mariadb_setup.sh

ENTRYPOINT ["/mariadb_setup.sh"]

CMD ["mysqld"]
