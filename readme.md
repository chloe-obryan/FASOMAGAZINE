



## login info

user: admin@admin.com| password: password


## Installation

```

composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan db:seed
```


```
php artisan db:seed --class=DummyDataSeeder
```

## API Endpoints

This projects exposes some API endpoints. You could request those endpoints with the `api_token` passed as query parameters, like this- `/api/tags?api_token=YOUR_API_KEY`. You can also pass the token as a Authorization Bearer token. The API key could be obtained from `/api/auth/token` endpoint. Available endpoints are-


