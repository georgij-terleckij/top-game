docker-compose up -d --build

docker exec -it l2top_app bash
php artisan migrate
php artisan migrate:fresh

php artisan migrate:fresh --seed
