<div>
    @if(count($projects))
        <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
            @foreach($projects as $project)
                <x-project-card :project="$project" />
            @endforeach
        </div>
    @else
        <div class="rounded-3xl border border-dashed border-ink/20 bg-white/70 p-8 text-center text-sm text-muted">
            Ainda não há projetos cadastrados no banco de dados.
        </div>
    @endif
</div>
