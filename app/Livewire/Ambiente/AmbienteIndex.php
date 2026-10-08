<?php

namespace App\Livewire\Ambiente;

use App\Models\Ambiente;
use Livewire\Component;

class AmbienteIndex extends Component
{
    public string $search = '';

    public function delete(int $id): void
    {
        if ($ambiente = Ambiente::find($id)) {
            $ambiente->delete();
            session()->flash('success', 'Ambiente excluído com sucesso.');
        }
    }

    public function render()
    {
        $ambientes = Ambiente::withCount('sensores')
            ->where('nome', 'like', '%'.$this->search.'%')
            ->orderBy('nome')
            ->get();

        return view('livewire.ambiente.ambiente-index', compact('ambientes'));
    }
}
