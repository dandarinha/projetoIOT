<?php

namespace App\Livewire\Sensor;

use App\Models\Ambiente;
use App\Models\Sensor;
use Livewire\Component;

class SensorCreate extends Component
{
    public $ambiente_id = '';
    public string $codigo = '';
    public string $tipo = '';
    public string $descricao = '';
    public bool $status = true;

<<<<<<< HEAD
    public function store()
=======
    protected function rules(): array
>>>>>>> 6f2a0da7f629a084895bc1f44b04a1197587d6b0
    {
        return ['ambiente_id' => ['required', 'exists:ambientes,id'], 'codigo' => ['required', 'string', 'max:255', 'unique:sensors,codigo'], 'tipo' => ['required', 'string', 'max:255'], 'descricao' => ['required', 'string'], 'status' => ['boolean']];
    }

    public function store()
    {
        Sensor::create($this->validate());
        session()->flash('success', 'Sensor cadastrado com sucesso.');
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
