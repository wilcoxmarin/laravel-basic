FROM php:7.2-fpm

# Copiamos los archivos composer.lock and composer.json
COPY composer.lock composer.json /var/www/

#  Directorio de trabajo
WORKDIR /var/www/

# Instalamos dependencias
RUN apt-get update && apt-get install -y \
    build-essential \
    locales \
    git \
    unzip \
    zip \
    curl \
    supervisor \
    libpq-dev

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Instalamos las extensiones
RUN docker-php-ext-install pdo pdo_pgsql mbstring  exif pcntl

# Instalamos composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Copiamos nuestra aplicacion
COPY . /var/www/
COPY ./docker/websockets.conf /etc/supervisor/conf.d/

EXPOSE 9000
CMD ["php-fpm"] \
    ["supervisorctl update"] \
    ["supervisorctl start websockets"]
