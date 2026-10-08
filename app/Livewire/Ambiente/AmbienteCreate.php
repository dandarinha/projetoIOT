<?php

namespace App\Livewire\Ambiente;

use App\Models\Ambiente;
use Livewire\Component;

class AmbienteCreate extends Component
{
    public string $nome = '';
    public string $descricao = '';
    public bool $status = true;


    protected function rules(): array
    {
        return 
        ['nome' => ['required', 'string', 'max:255'], 
        'descricao' => ['nullable', 'string'], 
        'status' => ['boolean']];
    }

    public function store()
    {
        $data = $this->validate();
        Ambiente::create($data);
        session()->flash('success', 'Ambiente cadastrado com sucesso.');
        return redirect()->route('ambiente.index');
    }

    public function render()
    {
        return view('livewire.ambiente.ambiente-create');
    }
}
