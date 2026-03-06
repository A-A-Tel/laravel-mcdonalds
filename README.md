# Project

## Run deze commands en je kunt op de website komen.

```shell
  git clone https://github.com/A-A-Tel/laravel-mcdonalds
  cd laravel-mcdonalds
  cp .env.example .env
  touch database/database.sqlite
  composer install --no-dev
  php artisan key:generate
  php artisan migrate
  php artisan db:seed
  php artisan storage:link
  php artisan serve
```
