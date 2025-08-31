FROM wordpress:6.6-php8.2-fpm

# Nginx kur
RUN apt-get update && apt-get install -y nginx && rm -rf /var/lib/apt/lists/*

# Nginx config ekle
COPY nginx/default.conf /etc/nginx/conf.d/default.conf

# WordPress root
WORKDIR /var/www/html

# Start script
COPY start.sh /start.sh
RUN chmod +x /start.sh

EXPOSE 8080

CMD ["/start.sh"]
