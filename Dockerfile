FROM dunglas/frankenphp
 
RUN install-php-extensions \
    pcntl \
    redis


COPY --from=composer:2.7 /usr/bin/composer /usr/bin/composer


WORKDIR /app
 
COPY . /app
 
ENTRYPOINT ["php", "artisan", "octane:frankenphp"]
