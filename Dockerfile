# Use the nginx-php-fpm image as a base
FROM render/nginx-php

# Copy your Laravel app's source code into the container
COPY . /var/www/html

# Install any additional dependencies or perform necessary configurations
RUN composer install --no-dev

# Expose port (if needed)
EXPOSE 8080

# Start the application
CMD ["/usr/bin/supervisord"]
