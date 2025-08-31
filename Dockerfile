# Resmi WordPress image'ını baz al
FROM wordpress:6.8-apache

# Özel içerik veya tema dosyalarını kopyala (varsa)
COPY ./wp-data/ /var/www/html/

# PHP ayarlarını özelleştir (örneğin upload limitlerini artırmak için)
COPY ./php.ini /usr/local/etc/php/conf.d/custom.ini

# Apache üzerinde gerekli modülleri aktifleştir (örn. mod_rewrite)
RUN a2enmod rewrite
