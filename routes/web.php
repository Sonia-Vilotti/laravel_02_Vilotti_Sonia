<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage');
});
Route::get('/chi-siamo', function () {
    return view('chi-siamo');
});
Route::get('/servizi', function () {
    $array = ['servizio1', 'servizio2', 'servizio3'];
    return view('servizi', ['servizi' => $array]);
});
Route::get('/dettaglio-servizio/{servizio}', function ($servizio) {
    return view('detail', ['servizio' => $servizio]);
});
