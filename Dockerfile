# Use the official PHP image with CLI and FPM support
FROM php:8.0-cli

# Install PostgreSQL client and necessary extensions for PDO and PostgreSQL
RUN apt-get update && apt-get install -y \
    libpq-dev \
    && docker-php-ext-install pdo pdo_pgsql pgsql

# Set the working directory in the container
WORKDIR /var/www/html/public_html

# Copy your application files into the container
COPY . /var/www/html/

# Set the correct permissions for the web root directory
RUN chown -R www-data:www-data /var/www/html
RUN chmod -R 755 /var/www/html

# Set the DATABASE_URL environment variable
ENV DATABASE_URL "sqlite://:memory:"

# Expose port 80
EXPOSE 80

# Start the PHP built-in server (point to public_html folder)
CMD ["php", "-S", "0.0.0.0:80", "-t", "/var/www/html/public_html"]

