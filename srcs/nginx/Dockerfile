# Start from the latest Nginx image
FROM nginx:latest

# Remove the default Nginx configuration file
RUN rm /etc/nginx/conf.d/default.conf

COPY nginx.conf /etc/nginx/nginx.conf
COPY conf.d /etc/nginx/conf.d

# Create a directory for SSL
RUN mkdir -p /etc/nginx/ssl

# In your Docker Compose, you are mounting the SSL directory. So, you may want to COPY it here as well
COPY ssl /etc/nginx/ssl

# Expose ports 80 and 443 for the Nginx server
EXPOSE 80 443

# Start the Nginx server
CMD ["nginx", "-g", "daemon off;"]
