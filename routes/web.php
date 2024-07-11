<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Home;
use App\Livewire\TestApi;

Route::get('/',Home::class);


Route::get('/test',TestApi::class);

?>