# patrykpilek.info


### Prerequisites

Add to .env
```
APP_NAME=patrykpilek.info
APP_ENV=production
...
APP_DEBUG=false
APP_URL=https://patrykpilek.info
...
DB_DATABASE=patrykpilek
DB_USERNAME=
DB_PASSWORD=
...
QUEUE_CONNECTION=database
...
MAIL_DRIVER=
MAIL_HOST=
MAIL_PORT=
MAIL_USERNAME=
MAIL_PASSWORD=
MAIL_ENCRYPTION=
MAIL_FROM_ADDRESS=admin@patrykpilek.info
MAIL_FROM_NAME=Admin
...
AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=
...
PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_APP_CLUSTER=
```

### Installing

```
git clone https://github.com/patrykpilek/patrykpilek.info.git
composer install
npm install
npm run prod
php artisan key:generate
php artisan storage:link
php artisan migrate
php artisan queue:work --tries=5
```

## Built With

* [Laravel](https://www.laravel.com) - The php framework

## Authors

* **Patryk Pilek** - [patrykpilek.com](https://patrykpilek.com)
