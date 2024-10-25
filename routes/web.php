<?php

use App\Http\Controllers\hellowordcontroller;
use App\Http\Controllers\HelloworldController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

route::get('helloworld', [HelloworldController::class, 'index']);
route::get('ambilfile', [HelloworldController::class, 'ambilfile']);
route::get('getlorem', [helloworldcontroller::class, 'getlorem']);
