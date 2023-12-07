# Используйте официальный образ PHP-FPM 7.4
FROM php:7.4-fpm

# Устанавливаем необходимые зависимости
RUN apt-get update && apt-get install -y \
    libzip-dev \
    unzip \
    libpq-dev

# Устанавливаем расширения PHP
RUN docker-php-ext-install pdo pdo_pgsql zip

# Копируем файлы проекта в контейнер
COPY . /var/www/laratest

# Назначаем права на директорию проекта
RUN chown -R www-data:www-data /var/www/laratest

# Опционально: можно выполнять другие команды установки, которые вам могут понадобиться

# Определяем рабочую директорию
WORKDIR /var/www/laratest
# Устанавливаем Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Опционально: можно добавить команду для установки зависимостей Composer
RUN composer install --no-dev --optimize-autoloader

# Заменяем команду для установки зависимостей Composer
CMD ["composer", "install", "--no-dev", "--optimize-autoloader"]
