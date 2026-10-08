<?php

namespace App\Livewire\Sensor;

use App\Models\Sensor;
use Livewire\Component;

class SensorIndex extends Component
{
    public string $search = '';

    public function delete(int $id): void
    {
        if ($sensor = Sensor::find($id)) {
            $sensor->delete();
            session()->flash('success', 'Sensor excluído com sucesso.');
        }
    }

    public function render()
    {
        $sensores = Sensor::with('ambiente')
            ->where(function ($query) {
                $query->where('codigo', 'like', '%'.$this->search.'%')
                    ->orWhere('tipo', 'like', '%'.$this->search.'%');
            })
            ->orderBy('codigo')
            ->get();

        return view('livewire.sensor.sensor-index', compact('sensores'));
    }
}
