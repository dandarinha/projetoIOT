<?php

namespace App\Livewire\Sensor;

use App\Models\Ambiente;
use App\Models\Sensor;
use Livewire\Component;

class SensorCreate extends Component
{
    public $ambiente_id;
    public $codigo;
    public $tipo;
    public $descricao;
    public $status;

    public function store()
    {
        Sensor::create([
            'ambiente_id' => $this->ambiente_id,
            'codigo' => $this->codigo,
            'tipo' => $this->tipo,
            'descricao' => $this->descricao,
            'status' => $this->status,
        ]);

        session()->flash('success', 'Cadastrado');
        return redirect()->route('sensor.index');
    }

    public function status($id){
        $sensor = Sensor::find($id);
        $sensor->status = !$sensor->status;
        $sensor ->save();
    }

    public function render()
    {
        return view('livewire.sensor.sensor-create', ['ambientes' => Ambiente::orderBy('nome')->get()]);
    }
}
