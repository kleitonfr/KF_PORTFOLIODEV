<div class="space-y-8">
    <div class="flex gap-4 overflow-x-auto pb-4 snap-x snap-mandatory">
        @forelse($projects as $project)
            <a
                href="{{ route('projects.show', ['slug' => $project['slug']]) }}"
                wire:navigate
                class="min-w-[280px] max-w-[320px] snap-start rounded-[28px] border border-ink/10 bg-white p-5 text-left shadow-sm transition hover:-translate-y-1 hover:shadow-xl"
            >
                <div class="mb-4 h-40 rounded-2xl bg-gradient-to-br from-sun/40 via-white to-aqua/30 p-4">
                    <div class="flex h-full items-end justify-between rounded-xl border border-dashed border-ink/20 bg-cream/70 p-4">
                        <div>
                            <p class="text-xs font-semibold uppercase tracking-[0.24em] text-muted">Projetos</p>
                            <p class="mt-2 font-display text-xl font-semibold text-ink">{{ $project['title'] }}</p>
                        </div>
                        <span class="text-2xl">📦</span>
                    </div>
                </div>

                <p class="text-sm font-semibold text-ink">{{ $project['subtitle'] }}</p>
                <p class="mt-2 text-sm leading-6 text-muted">{{ $project['excerpt'] }}</p>

                <div class="mt-4 flex flex-wrap gap-2">
                    @foreach(array_slice($project['tags'], 0, 3) as $tag)
                        <span class="rounded-full border border-sun/40 bg-sun/10 px-3 py-1 text-[11px] font-semibold uppercase tracking-[0.16em] text-ink">{{ $tag }}</span>
                    @endforeach
                </div>
            </a>
        @empty
            <div class="rounded-3xl border border-dashed border-ink/20 bg-white/70 p-8 text-sm text-muted">
                Ainda não há projetos cadastrados no banco SQLite.
            </div>
        @endforelse
    </div>

    @if($project)
        <div class="rounded-[34px] border border-ink/10 bg-ink p-8 text-cream shadow-2xl">
            <div class="flex items-start justify-between gap-4">
                <div>
                    <p class="text-xs font-semibold uppercase tracking-[0.3em] text-sun">Artigo</p>
                    <h3 class="mt-2 font-display text-3xl font-semibold">{{ $project['title'] }}</h3>
                    <p class="mt-3 max-w-2xl text-sm leading-7 text-cream/80">{{ $project['description'] }}</p>
                </div>
                <button wire:click="closeProject" class="rounded-full border border-white/20 px-4 py-2 text-sm font-semibold text-cream/80 transition hover:bg-white/10">Fechar</button>
            </div>

            <div class="mt-8 grid gap-6 lg:grid-cols-[1.3fr_0.7fr]">
                <div class="rounded-[24px] border border-white/10 bg-white/10 p-6">
                    <p class="text-xs font-semibold uppercase tracking-[0.28em] text-aqua">Modelo de conteúdo</p>
                    <div class="mt-4 space-y-4 text-sm leading-7 text-cream/80">
                        <p>Use este espaço para apresentar contexto, problema, solução e resultado.</p>
                        <p>Você pode substituir os textos por conteúdo real, inserir imagens e ajustar a estrutura conforme o projeto evoluir.</p>
                    </div>
                </div>
                <div class="rounded-[24px] border border-white/10 bg-white/10 p-6">
                    <p class="text-xs font-semibold uppercase tracking-[0.28em] text-pink">Detalhes</p>
                    <ul class="mt-4 space-y-3 text-sm text-cream/80">
                        @foreach($project['tags'] as $tag)
                            <li class="rounded-full border border-white/10 bg-white/5 px-3 py-2">{{ $tag }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    @endif
</div>
