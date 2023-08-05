#!/bin/bash
set -e

# Check if this is the first time the container is running
if [ ! -e /var/lib/mysql/initialized ]; then
    # Run the MariaDB setup script if it exists
    if [ -f /mariadb_setup.sh ]; then
        /mariadb_setup.sh
    fi

    # Mark the container as initialized to avoid re-running the setup on subsequent starts
    touch /var/lib/mysql/initialized
fi

# Start the MariaDB server
exec "$@"
