# Basic Auth

## Instalation 
### Install Package Via Composer
```composer require timedoor/tmd-basic-auth```

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

## Thank You
