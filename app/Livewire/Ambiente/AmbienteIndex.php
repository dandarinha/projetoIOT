<?php

namespace App\Livewire\Ambiente;

use App\Models\Ambiente;
use Livewire\Component;


    class Ambienteindex extends Component
{
    public $search='';

    public function delete($id)
    {
        $ambiente = Ambiente::find($id);

        if ($ambiente != null) {
            $ambiente->delete();
            session()->flash('success', 'Excluído');
        }
    }

    public function render()
    {
        $ambientes = Ambiente::where('nome', 'like', '%'.$this->search.'%' )->get();

        return view('livewire.ambiente.ambiente-index', compact('ambientes'));
    }
}

