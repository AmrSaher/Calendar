<?php

use App\Http\Controllers\CalendarController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('full-calender', [CalendarController::class, 'index']);

Route::post('full-calender/action', [CalendarController::class, 'action']);
