<?php

namespace App\Livewire\Ambiente;

use App\Models\Ambiente;
use Livewire\Component;

class AmbienteEdit extends Component
{
    public int $ambiente_id;
    public string $nome = '';
    public string $descricao = '';
    public bool $status = true;

    public function mount(int $id)
    {
        $ambiente = Ambiente::find($id);
        if (!$ambiente) {
            session()->flash('error', 'Ambiente não encontrado.');
            return redirect()->route('ambiente.index');
        }

        $this->ambiente_id = $ambiente->id;
        $this->nome = $ambiente->nome;
        $this->descricao = $ambiente->descricao ?? '';
        $this->status = $ambiente->status;
    }

    protected function rules(): array
    {
        return ['nome' => ['required', 'string', 'max:255'], 'descricao' => ['nullable', 'string'], 'status' => ['boolean']];
    }

    public function update()
    {
        $ambiente = Ambiente::find($this->ambiente_id);
        if (!$ambiente) {
            session()->flash('error', 'Ambiente não encontrado.');
            return redirect()->route('ambiente.index');
        }

        $ambiente->update($this->validate());
        session()->flash('success', 'Ambiente atualizado com sucesso.');
        return redirect()->route('ambiente.index');
    }

    public function render()
    {
        return view('livewire.ambiente.ambiente-edit');
    }
}
