# Use the Alpine image as the base
FROM alpine:latest

# Update and install the necessary dependencies
RUN apk update && apk add \
    mariadb \
    mariadb-client \
    openrc \
    bash

# Remove default databases
RUN rm -rf /var/lib/mysql

# Copy over files
COPY ./srcs/mariaDB /var/lib/mysql

# Make the MariaDB service start automatically when the container starts
RUN rc-update add mariadb default && \
    echo -e "[mysqld]\nskip-host-cache\nskip-name-resolve" > /etc/my.cnf.d/mariadb-server.cnf && \
    /etc/init.d/mariadb setup

# Setup MariaDB
COPY mariadb_setup.sh /
RUN chmod +x /mariadb_setup.sh
CMD [ "/mariadb_setup.sh" ]

# Expose the MariaDB port
EXPOSE 3306
