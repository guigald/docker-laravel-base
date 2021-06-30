# Project
Docker with 
- PHP 7.4.3
- Laravel 7.30.4
- nginx
- MySql 5.7
- Redis
- Elasticsearch

### Install
```bash
git clone git@github.com:guigald/docker-laravel-base.git api
cd api
cp .env-example.env
docker-compose build
docker-copose up -d
docker exec -it app bash
    composer install
    php artisan key:generate
    php artisan migrate
    exit
```

### Access
- API: http://localhost:8000/api/v1

- MySql: Get the host by running the command below. Username, port and password are defined in .env 
    ```bash
    docker inspect db | grep IPAddress
    ```
- Elastic:  http://localhost:8200