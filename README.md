# patrykpilek.info

// ToDo - project description

## Getting Started

// ToDo - These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. See deployment for notes on how to deploy the project on a live system.

### Prerequisites

// ToDo - What things you need to install the software and how to install them

Add to .env
```
APP_NAME=patrykpilek.info
...
APP_URL=http://patrykpilek.test
...
DB_DATABASE=patrykpilekinfo
DB_USERNAME=homestead
DB_PASSWORD=secret
...
QUEUE_CONNECTION=database
...
MAIL_DRIVER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=d5ef83e034bbc7
MAIL_PASSWORD=06a921a97012a0
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS=admin@patrykpilek.info
MAIL_FROM_NAME=Admin
...
AWS_ACCESS_KEY_ID=AKIA22QMXIYRI5ODSJME
AWS_SECRET_ACCESS_KEY=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
AWS_DEFAULT_REGION=eu-west-2
...
PUSHER_APP_ID=901509
PUSHER_APP_KEY=c02fe2de66e9af55e96d
PUSHER_APP_SECRET=9c621322de9dffa667b8
PUSHER_APP_CLUSTER=eu
```

```
php artisan key:generate
php artisan migrate
php artisan queue:work --tries=5
```

### Installing

// ToDo - A step by step series of examples that tell you how to get a development env running

Say what the step will be

```
Give the example
```

### Application Database Schema 
![picture](database_schema.png)

## Built With

* [Laravel](https://www.laravel.com) - The php framework

## Authors

* **Patryk Pilek** - [patrykpilek.com](https://patrykpilek.com)
