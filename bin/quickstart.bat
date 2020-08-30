cd laradock
docker-compose -f ./docker-compose-quickstart.yml up quickstart_win
docker-compose -f ./docker-compose-quickstart.yml down

docker-compose up -d nginx php-fpm mysql adminer mailhog workspace
docker-compose exec workspace cp .env.example .env
docker-compose exec workspace composer install
docker-compose exec workspace php artisan key:generate
docker-compose exec workspace php artisan migrate
docker-compose exec workspace bash
cd ..
