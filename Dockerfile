# WordPress PHP-FPM resmi image
FROM wordpress:6.6-php8.2-fpm

# Nginx kur
RUN apt-get update && apt-get install -y nginx && rm -rf /var/lib/apt/lists/*

# Nginx config kopyala
COPY default.conf /etc/nginx/conf.d/default.conf

# Start script
COPY start.sh /start.sh
RUN chmod +x /start.sh

# WordPress root
WORKDIR /var/www/html

# Port expose
EXPOSE 80

# Başlat
CMD ["/start.sh"]
