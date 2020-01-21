# patrykpilek.info

### Installing

```
git clone https://github.com/patrykpilek/patrykpilek.info.git
composer install
cp .env.example .env
php artisan key:generate
```

### Prerequisites

Add to .env
```
APP_NAME=patrykpilek.info
APP_ENV=production
...
APP_DEBUG=false
APP_URL=https://patrykpilek.info
...
DB_DATABASE=patrykpilek_info
DB_USERNAME=username_with_access_to_database
DB_PASSWORD=password_to_databse
...
BROADCAST_DRIVER=pusher
...
QUEUE_CONNECTION=database
...
MAIL_DRIVER=from_mailgun
MAIL_HOST=from_mailgun
MAIL_PORT=from_mailgun
MAIL_USERNAME=from_mailgun
MAIL_PASSWORD=from_mailgun
MAIL_ENCRYPTION=from_mailgun
MAIL_FROM_ADDRESS=admin@patrykpilek.info
MAIL_FROM_NAME=patrykpilek.info
...
AWS_ACCESS_KEY_ID=from_aws_s3
AWS_SECRET_ACCESS_KEY=from_aws_s3
AWS_DEFAULT_REGION=from_aws_s3
...
PUSHER_APP_ID=from_pusher
PUSHER_APP_KEY=from_pusher
PUSHER_APP_SECRET=from_pusher
PUSHER_APP_CLUSTER=from_pusher
```

Change resources/js/apis/streams.js file:
```
export default window.axios.create({
    baseURL: 'https://patrykpilek.info/api/'
});
```

### Run

```
php artisan migrate
php artisan storage:link
npm install
npm run prod
php artisan queue:work --tries=5
or
setup supervisor - check laravel doc
```

## Built With

* [Laravel](https://www.laravel.com) - The php framework

## Authors

* **Patryk Pilek** - [patrykpilek.com](https://patrykpilek.com)
