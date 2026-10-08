<?php

namespace App\Livewire\Ambiente;

use App\Models\Ambiente;
use Livewire\Component;

class AmbienteCreate extends Component
{
    public $nome;
    public $descricao;
    public $status;

    protected function rules(): array
    {
        return 
        ['nome' => ['required', 'string', 'max:255'], 
        'descricao' => ['nullable', 'string'], 
        'status' => ['boolean']];
    }

    public function store()
    {
        Ambiente::create([
            'nome' => $this->nome,
            'descricao' => $this->descricao,
            'status' => $this->status,
        ]);

        session()->flash('success', 'Cadastrado');
        return redirect()->route('ambiente.index');
    }

    public function render()
    {
        return view('livewire.ambiente.ambiente-create');
    }
}
