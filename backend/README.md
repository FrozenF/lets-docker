# Dockerize Lumen / Laravel APP

## 1. Copy .env.example to .env
```bash
cp .env.example .env
```
## 2. Tambah Dockerfile
```
# Variable untuk Docker File
ARG PHP_VERSION="8.1"

# Pilih Image Utama
FROM php:${PHP_VERSION}-fpm

# Install Ekstensi
RUN docker-php-ext-install pdo pdo_mysql

# Add Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Pindah Ke Directory APP
WORKDIR /var/www/app

# Copy Composer lock dan json
COPY composer.* .

# Jalankan Composer install
RUN composer install

# Copy Aplikasi
COPY . .

# Hanya digunakan ketika PHP tidak menggunakan NGINX
CMD php -S 0.0.0.0:8000 -t /var/www/app/public
EXPOSE 8000
```
## 3. Proses Build Docker File
### CLI
```bash
docker build -t {IMAGE_NAME}:{TAG} .
```
### Contoh
```bash
docker build -t app_backend:latest .
```
## 4. Test Hasil Build Docker
```
docker run -d --name test_lumen -p 8000:8000 -it app_backend:latest 
```
## 5. Check menggunakan command ps
```
docker ps
```
## 5. Test di Browser
```
http://localhost:8000
```
## 6. Hapus Container
### Berhentikan Container
```bash
docker stop test_lumen
```

### Hapus Container
```bash
docker rm test_lumen
```
