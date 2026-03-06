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

De administrator accountinformatie is:

```
   Email: admin.istrator@company.com
   Pass: 12345
```

De standaardgebruiker is:

```
   Email: regu.larjoe@consumer.io
   Pass: 12345
```

Ga naar het dashboard (rechtsboven) als admin om naar het paneel te gaan, als gebruiker ga je naar je huidige
reserveringen en contactverzoeken.
