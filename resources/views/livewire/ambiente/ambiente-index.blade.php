<div>
    <div class="d-flex flex-wrap justify-content-between align-items-center gap-3 mb-4">
        <div>
            <h1 class="h3 mb-1"><i class="bi bi-door-open"></i> Ambientes</h1>
            <p class="text-secondary mb-0">Espaços cadastrados na escola.</p>
        </div><a href="{{ route('ambiente.create') }}" class="btn btn-primary"><i class="bi bi-plus-lg me-1"></i>Novo
            ambiente</a>
    </div>
    <div class="card border-0 shadow-sm">
        <div class="card-body border-bottom">
            <div class="input-group"><span class="input-group-text bg-white"><i class="bi bi-search"></i></span><input
                    wire:model.live="search" type="search" class="form-control" placeholder="Buscar por nome..."></div>
        </div>
        <div class="table-responsive">
            <table class="table align-middle mb-0">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Descrição</th>
                        <th>Sensores</th>
                        <th>Status</th>
                        <th class="text-end">Ações</th>
                    </tr>
                </thead>
                <tbody>@forelse($ambientes as $ambiente)<tr>
                        <td class="fw-semibold">{{ $ambiente->nome }}</td>
                        <td class="text-secondary">{{ $ambiente->descricao ?: 'Sem descrição' }}</td>
                        <td>{{ $ambiente->sensores_count }}</td>
                        <td><span class="badge text-bg-{{ $ambiente->status ? 'success' : 'secondary' }}">{{
                                $ambiente->status ? 'Ativo' : 'Inativo' }}</span></td>
                        <td class="text-end"><a href="{{ route('ambiente.edit', $ambiente->id) }}"
                                class="btn btn-sm btn-outline-primary me-1"><i class="bi bi-pencil"></i></a><button
                                wire:click="delete({{ $ambiente->id }})" wire:confirm="Deseja excluir este ambiente?"
                                class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button></td>
                    </tr>@empty<tr>
                        <td colspan="5" class="text-center text-secondary py-4">Nenhum ambiente encontrado.</td>
                    </tr>@endforelse</tbody>
            </table>
        </div>
    </div>
</div>