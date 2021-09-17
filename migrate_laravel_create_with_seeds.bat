@ECHO OFF

docker exec -it laravel-container-shop php artisan migrate --seed


