<?php

namespace App\Livewire\Sensor;

use App\Models\Ambiente;
use App\Models\Sensor;
use Livewire\Component;

class SensorEdit extends Component
{
    public $ambiente_id;
    public $codigo;
    public $tipo;
    public $descricao;
    public $status;
    public $sensor_id;



    public function mount(int $id)
    {
        $sensor = Sensor::find($id);
        if (!$sensor) {
            session()->flash('error', 'Sensor não encontrado.');
            return redirect()->route('sensor.index');
        }

        $this->sensor_id = $sensor->id;
        $this->ambiente_id = $sensor->ambiente_id;
        $this->codigo = $sensor->codigo;
        $this->tipo = $sensor->tipo;
        $this->descricao = $sensor->descricao;
        $this->status = $sensor->status;
    }

    protected function rules(): array
    {
        return ['ambiente_id' => ['required', 'exists:ambientes,id'], 'codigo' => ['required', 'string', 'max:255', 'unique:sensors,codigo,'.$this->sensor_id], 'tipo' => ['required', 'string', 'max:255'], 'descricao' => ['required', 'string'], 'status' => ['boolean']];
    }

    public function update()
    {
        $sensor = Sensor::find($this->sensor_id);
        if (!$sensor) {
            session()->flash('error', 'Sensor não encontrado.');
            return redirect()->route('sensor.index');
        }

        $sensor->update($this->validate());
        session()->flash('success', 'Sensor atualizado com sucesso.');
        return redirect()->route('sensor.index');
    }

    public function render()
    {
        return view('livewire.sensor.sensor-edit', ['ambientes' => Ambiente::orderBy('nome')->get()]);
    }
}
