# Basic Auth

## Instalation 
### Install Package Via Composer
`composer require shinedira/shine-swagger`

Publish config
```
php artisan vendor:publish --tag=tmd-bsa
```
this will copy config from basic auth with file name `tmd-bsa.php`

Route Implementation Example
```
Route::get('/', function () {
    return view('welcome');
})->middleware('tmd-bsa');
```

>You can add new provider on config file and add new param on middleware
```
Route::get('/', function () {
    return view('welcome');
})->middleware('tmd-bsa:admin,client');
```

Run command
```
php artisan generate:api-docs
```

## Thank You
