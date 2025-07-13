<?php

use App\Http\Controllers\RumahSakitController;

Route::post('/rumah-sakit', [RumahSakitController::class, 'store']);
