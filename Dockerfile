FROM php:8.3-cli

WORKDIR /var/www/html

RUN apt-get update && apt-get install -y 
git 
unzip 
libzip-dev 
&& docker-php-ext-install pdo_mysql zip 
&& rm -rf /var/lib/apt/lists/*

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

COPY composer.json composer.lock ./
RUN composer install --no-dev --optimize-autoloader --no-interaction

COPY package.json package-lock.json ./
RUN apt-get update && apt-get install -y nodejs npm 
&& npm ci 
&& rm -rf /var/lib/apt/lists/*

COPY . .

RUN npm run build

RUN php artisan config:clear 
&& php artisan route:clear 
&& php artisan view:clear 
&& chmod -R 775 storage bootstrap/cache

EXPOSE 10000

CMD php artisan serve --host=0.0.0.0 --port=${PORT:-10000}
