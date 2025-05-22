<?php

use Illuminate\Support\Facades\Route;
use Commacode\ZoomIntegration\Http\Controllers\ZoomController;

Route::get('/zoom/meeting/{id}', [ZoomController::class, 'showMeeting']);
