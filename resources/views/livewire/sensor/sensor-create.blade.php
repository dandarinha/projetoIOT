<div class="mt-4">
    <div class="card">
        <h5 class="card-header">Adicionar Sensor </h5>
        <div class="body">
            <form wire:submit.prevent="store">
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" class="form-control" wire:model="nome" name="nome" id="nome" placeholder="Ex: Estudar...">
                </div>

                <div class="mb-3">
                    <label for="data_hora" class="form-label">Data da Tarefa</label>
                    <input type="datetime-local" class="form-control" wire:model="data_hora" id="data_hora" name="data_hora">
                </div>

                <div class="mb-3">
                    <label for="descricao" class="form-label">Descrição</label>
                    <textarea class="form-control" wire:model="descricao" id="descricao" name="descricao" rows="4"></textarea>
                </div>

                <div class="mb-3">
                    <button type="submit" class="btn btn-success">Salvar</button>
                </div>

            </form>
        </div>
    </div>
    
</div>