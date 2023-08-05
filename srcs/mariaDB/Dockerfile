# Use the debian buster image
FROM debian:buster

# Update package lists and install MariaDB server
RUN apt-get update && apt-get install -y mariadb-server

# Copy the setup script and MySQL configuration file
COPY mariadb_setup.sh /mariadb_setup.sh

# Give executable permissions to the setup script
RUN chmod +x /mariadb_setup.sh

# Set the custom entrypoint script as the entrypoint
ENTRYPOINT ["/mariadb_setup.sh"]

# The CMD is set to start mysqld as the main process (can be overridden by running the container with a command)
CMD ["mysqld"]
