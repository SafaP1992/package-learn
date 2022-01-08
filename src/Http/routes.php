<?php

use Illuminate\Support\Facades\Route;

Route::get('/create',[Vafa\Packagelearn\Http\Controllers\User\UserController::class, 'create']);