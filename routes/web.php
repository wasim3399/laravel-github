<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/deploy', function () {
    Artisan::call('down');  // Put the app in maintenance mode
    exec('sh deploy.sh');    // Run the deployment script
    Artisan::call('up');    // Bring the app out of maintenance mode
    return 'Deployment completed.';
});

Route::get('/deploy', function () {
    dd('test');
});
