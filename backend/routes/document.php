<?php

use App\Http\Controllers\Document\DocumentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/document', [DocumentController::class, 'index']);
