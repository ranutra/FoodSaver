<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/order-pekerja', function () {
    return 'Order Pekerja page';
});

Route::get('/review', function () {
    return 'Review page';
});

Route::get('/about-us', function () {
    return 'About Us page';
});