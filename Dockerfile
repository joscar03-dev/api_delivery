# Etapa de construcción
FROM php:8.3-fpm

# Instalar dependencias del sistema
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libzip-dev \
    libonig-dev \
    libcurl4-openssl-dev \
    pkg-config \
    libssl-dev \
    && docker-php-ext-install pdo_mysql zip

# Instalar Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Establecer directorio de trabajo
WORKDIR /app

# Copiar archivos del proyecto
COPY . /app

# Instalar dependencias de Composer
RUN composer install --no-dev --optimize-autoloader --no-interaction --verbose

# Cambiar permisos
RUN chown -R www-data:www-data /app && chmod -R 755 /app

# Iniciar el servidor PHP-FPM (o Nginx si prefieres)
CMD ["php-fpm"]
