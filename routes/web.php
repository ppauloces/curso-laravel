<?php

use Illuminate\Support\Facades\Route;

Route::get('/contato', function (){
    return 'Contato';
});

Route::get('/', function () {
    return view('welcome');
});
