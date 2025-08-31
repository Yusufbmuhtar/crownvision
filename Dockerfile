# WordPress için base image
FROM wordpress:6.8-apache

# Eğer wp-data klasöründeki içerikleri container'a kopyalamak istiyorsan:
COPY wp-data/ /var/www/html/

# Gerekirse Apache veya PHP konfig ayarları eklenebilir
