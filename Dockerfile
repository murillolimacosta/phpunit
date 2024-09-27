# Usar uma imagem PHP como base (aqui com Apache, mas pode ser cli se preferir)
FROM php:8.2-apache

# Instalar algumas dependências e o Composer
RUN apt-get update && apt-get install -y \
    git \
    zip \
    unzip \
    && docker-php-ext-install pdo pdo_mysql

# Instalar PHPUnit usando o Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer global require phpunit/phpunit

# Tornar o PHPUnit disponível no PATH
ENV PATH="/root/.composer/vendor/bin:${PATH}"

# Copiar código da aplicação para o container
COPY . /var/www/html

# Configurar permissões de diretório
RUN chown -R www-data:www-data /var/www/html

# Expor a porta 80 para acessar o servidor
EXPOSE 80
