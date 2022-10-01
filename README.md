# LETS SAIL WITH DOCKER 2

### 1. Dockerize Lumen
### 2. Dockerize Vue
### 3. Bundle Stack
#### Create docker-compose.yml
```
services:
  docker_lumen:
    build :
      context: backend
      dockerfile: Dockerfile
    image: app_backend
    ports:
      - 8000:8000
    networks:
      - docker-network
  docker_vue:
    build:
      context: frontend
      dockerfile: Dockerfile
    image: app_frontend
    ports:
      - 8080:8080
    networks:
      - docker-network

networks:
  docker-network:
```