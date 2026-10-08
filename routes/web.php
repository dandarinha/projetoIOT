<?php

use App\Livewire\Ambiente\AmbienteCreate;
use App\Livewire\Ambiente\Ambienteindex;
use App\Livewire\Dashboard;
use App\Livewire\Sensor\SensorCreate;
use App\Livewire\Sensor\SensorIndex;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', Dashboard::class)->name('dashboard');

Route::get('/ambiente', Ambienteindex::class)->name('ambiente.index');

Route::get('/sensor', SensorIndex::class)->name('sensor.index');
Route::get('/sensor/create', SensorCreate::class)->name('sensor.create');