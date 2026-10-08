<?php

namespace App\Livewire;

use App\Models\Ambiente;
use App\Models\Sensor;
use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        return view('livewire.dashboard', [
            'totalAmbientes' => Ambiente::count(),
            'ambientesAtivos' => Ambiente::where('status', true)->count(),
            'totalSensores' => Sensor::count(),
            'sensoresAtivos' => Sensor::where('status', true)->count(),
            'ultimosAmbientes' => Ambiente::withCount('sensores')->latest()->take(5)->get(),
        ]);
    }
}
