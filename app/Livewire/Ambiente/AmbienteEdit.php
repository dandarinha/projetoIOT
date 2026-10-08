<?php

namespace App\Livewire\Ambiente;

use App\Models\Ambiente;
use Livewire\Component;

class AmbienteEdit extends Component
{
    public $nome;
    public $descricao;
    public $status;

    public function mount($id){
        $ambiente = Ambiente::find($id);
        if ($ambiente == null){
            session()->flash('error','Não encontrado');
        return redirect()->route('ambiente.index');
        }
      
        $this->nome = $ambiente->nome;
        $this->descricao = $ambiente->descricao;
        $this->status = $ambiente->status;
    }

    public function update(){
        $ambiente = Ambiente::find($this->ambiente_id);
        if ($ambiente == null){
            session()->flash('error','Não encontrado');
        return redirect()->route('ambiente.index');
        }

        $ambiente->nome = $this->nome;
        $ambiente->descricao = $this->descricao;
        $ambiente->status = $this->status;

        $ambiente->save();

        session()->flash('success','Atualizado');
        return redirect()->route('ambiente.index');
    }

    public function render()
    {
        return view('livewire.ambiente.ambiente-edit');
    }
}
