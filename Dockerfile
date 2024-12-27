FROM dunglas/frankenphp
 
RUN install-php-extensions \
    pcntl \
    redis
    
 
COPY . /app
 
ENTRYPOINT ["php", "artisan", "octane:frankenphp"]