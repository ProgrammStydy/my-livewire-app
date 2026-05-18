<?php

use App\Livewire\SimpleCounter;
use App\Livewire\Tasks\ToDoList;
use Illuminate\Support\Facades\Route;

Route::get('/counter', SimpleCounter::class);
Route::get('/todo', ToDoList::class);