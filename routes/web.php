<?php

use App\Livewire\Ambiente\AmbienteCreate;
use App\Livewire\Ambiente\AmbienteEdit;
<<<<<<< HEAD
use App\Livewire\Ambiente\Ambienteindex;
=======
use App\Livewire\Ambiente\AmbienteIndex;
>>>>>>> 6f2a0da7f629a084895bc1f44b04a1197587d6b0
use App\Livewire\Dashboard;
use App\Livewire\Sensor\SensorCreate;
use App\Livewire\Sensor\SensorEdit;
use App\Livewire\Sensor\SensorIndex;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/dashboard');
Route::get('/dashboard', Dashboard::class)->name('dashboard');

Route::get('/ambiente', AmbienteIndex::class)->name('ambiente.index');
Route::get('/ambiente/create', AmbienteCreate::class)->name('ambiente.create');
Route::get('/ambiente/{id}/edit', AmbienteEdit::class)->name('ambiente.edit');

Route::get('/sensor', SensorIndex::class)->name('sensor.index');
Route::get('/sensor/create', SensorCreate::class)->name('sensor.create');
<<<<<<< HEAD
Route::get('/sensor/{id}/edit', SensorEdit::class)->name('sensor.edit');
=======
Route::get('/sensor/{id}/edit', SensorEdit::class)->name('sensor.edit');
>>>>>>> 6f2a0da7f629a084895bc1f44b04a1197587d6b0
