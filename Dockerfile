# PHP-FPM WordPress image
FROM wordpress:php8.1-fpm-alpine

# PHP-FPM zaten hazır, CMD direkt çalıştır
CMD ["php-fpm"]
