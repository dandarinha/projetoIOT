<div>
    <div class="d-flex flex-wrap justify-content-between align-items-center gap-3 mb-4">
        <div><h1 class="h3 mb-1">Dashboard</h1><p class="text-secondary mb-0">Visão geral dos ambientes e sensores da escola.</p></div>
        <a href="{{ route('sensor.create') }}" class="btn btn-primary"><i class="bi bi-plus-lg me-1"></i>Novo sensor</a>
    </div>
    <div class="row g-3 mb-4">
        <div class="col-sm-6 col-xl-3"><div class="card stat-card h-100"><div class="card-body"><div class="text-secondary small">Ambientes</div><div class="fs-2 fw-bold">{{ $totalAmbientes }}</div><span class="text-success small"><i class="bi bi-check-circle"></i> {{ $ambientesAtivos }} ativos</span></div></div></div>
        <div class="col-sm-6 col-xl-3"><div class="card stat-card h-100"><div class="card-body"><div class="text-secondary small">Sensores</div><div class="fs-2 fw-bold">{{ $totalSensores }}</div><span class="text-success small"><i class="bi bi-broadcast"></i> {{ $sensoresAtivos }} ativos</span></div></div></div>
    </div>
    <div class="card border-0 shadow-sm"><div class="card-header bg-white py-3"><h2 class="h5 mb-0">Ambientes monitorados</h2></div><div class="table-responsive"><table class="table align-middle mb-0"><thead><tr><th>Ambiente</th><th>Descrição</th><th>Sensores</th><th>Status</th></tr></thead><tbody>@forelse($ultimosAmbientes as $ambiente)<tr><td class="fw-semibold">{{ $ambiente->nome }}</td><td class="text-secondary">{{ $ambiente->descricao ?: 'Sem descrição' }}</td><td>{{ $ambiente->sensores_count }}</td><td><span class="badge text-bg-{{ $ambiente->status ? 'success' : 'secondary' }}">{{ $ambiente->status ? 'Ativo' : 'Inativo' }}</span></td></tr>@empty<tr><td colspan="4" class="text-center text-secondary py-4">Nenhum ambiente cadastrado.</td></tr>@endforelse</tbody></table></div></div>
</div>
