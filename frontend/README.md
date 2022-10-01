# Dockerize Vue

## 1. Tambah Dockerfile
```
ARG NODE_VERSION=16.15.1

FROM node:${NODE_VERSION}

RUN yarn global add http-server

WORKDIR /usr/src/app
COPY package.json yarn.lock ./

RUN yarn install

COPY . .

RUN yarn build

EXPOSE 8080
CMD ["http-server", "dist"]
```
## 2. Proses Build Docker File
### CLI
```bash
docker build -t {IMAGE_NAME}:{TAG} .
```
### Contoh
```bash
docker build -t app_frontend:latest .
```
## 3. Test Hasil Build Docker
```
docker run -d --name test_vue -p 8080:8080 -it app_frontend:latest 
```
## 4. Check menggunakan command ps
```
docker ps
```
## 5. Test di Browser
```
http://localhost:8080
```
## 6. Hapus Container
### Berhentikan Container
```bash
docker stop test_vue
```

### Hapus Container
```bash
docker rm test_vue
```
