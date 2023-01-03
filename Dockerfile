FROM php:8.2.1RC1-alpine3.16

RUN set -ex \
  && apk --no-cache add \
    postgresql-dev

RUN docker-php-ext-install \
    pdo \
    pdo_pgsql

RUN curl -sS https://getcomposer.org/installer​ | php -- \
     --install-dir=/usr/local/bin --filename=composer

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /app
COPY . .
RUN composer install

CMD php artisan serve --port=8080