<div>
    <div class="mb-4">
        <h1 class="h3 mb-1">Novo sensor</h1>
        <p class="text-secondary mb-0">Cadastre um sensor e vincule-o a um ambiente.</p>
    </div>
    <div class="card border-0 shadow-sm">
        <div class="card-body">
            <form wire:submit="store">
                <div class="row g-3">
                    <div class="col-md-6"><label class="form-label" for="codigo">Código</label><input
                            wire:model="codigo" id="codigo" type="text"
                            class="form-control @error('codigo') is-invalid @enderror"
                            placeholder="Ex: TEMP01">@error('codigo')<div class="invalid-feedback">{{ $message }}
                        </div>@enderror</div>
                    <div class="col-md-6"><label class="form-label" for="tipo">Tipo</label><input wire:model="tipo"
                            id="tipo" type="text" class="form-control @error('tipo') is-invalid @enderror"
                            placeholder="Ex: Temperatura">@error('tipo')<div class="invalid-feedback">{{ $message }}
                        </div>@enderror</div>
                    <div class="col-12"><label class="form-label" for="ambiente_id">Ambiente</label><select
                            wire:model="ambiente_id" id="ambiente_id"
                            class="form-select @error('ambiente_id') is-invalid @enderror">
                            <option value="">Selecione um ambiente</option>@foreach($ambientes as $ambiente)<option
                                value="{{ $ambiente->id }}">{{ $ambiente->nome }}</option>@endforeach
                        </select>@error('ambiente_id')<div class="invalid-feedback">{{ $message }}</div>@enderror</div>
                    <div class="col-12"><label class="form-label" for="descricao">Descrição</label><textarea
                            wire:model="descricao" id="descricao" rows="3"
                            class="form-control @error('descricao') is-invalid @enderror"
                            placeholder="Descrição do monitoramento do sensor"></textarea>@error('descricao')<div
                            class="invalid-feedback">{{ $message }}</div>@enderror</div>
                </div>
                <div class="form-check form-switch my-4"><input wire:model="status" class="form-check-input"
                        type="checkbox" id="status"><label class="form-check-label" for="status">Sensor ativo</label>
                </div><a href="{{ route('sensor.index') }}" class="btn btn-outline-secondary me-2">Cancelar</a><button
                    class="btn btn-primary" type="submit"><i class="bi bi-check-lg me-1"></i>Salvar</button>
            </form>
        </div>
    </div>
</div>