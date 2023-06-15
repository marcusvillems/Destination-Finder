<?php

use App\Http\Controllers\StopController;
use App\Models\Stop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/stops', function () {
    $stops = Stop::all();
    return $stops;
});

Route::get('/stops/{stop}/destinations', function ($stop) {
    $stop = Stop::findOrFail($stop);
    $destinations = $stop->routes;
    return $destinations;
});
