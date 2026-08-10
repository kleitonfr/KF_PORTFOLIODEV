<div>
    @if(count($projects))
        @php
            $featured = $projects[0];
            $rest = array_slice($projects, 1);
            $accents = ['aqua', 'violet', 'pink', 'sun'];
        @endphp

        {{-- Card em destaque — primeiro projeto (posição 1) --}}
        <a
            href="{{ route('projects.show', ['slug' => $featured['slug']]) }}"
            wire:navigate
            class="group reveal block overflow-hidden rounded-2xl border border-border bg-surface transition-colors hover:border-sun md:flex md:items-stretch"
        >
            <div class="relative aspect-[4/3] w-full overflow-hidden bg-gradient-to-br from-surface2 to-bg md:aspect-auto md:w-2/5">
                @if(!empty($featured['image']))
                    <img src="{{ asset($featured['image']) }}" alt="{{ $featured['title'] }}" class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105" loading="lazy">
                @else
                    <div class="flex h-full items-center justify-center p-8 text-center font-display text-xl font-extrabold text-ink/80">{{ $featured['title'] }}</div>
                @endif

                @if(!empty($featured['is_award']))
                    <span class="absolute left-4 top-4 inline-flex items-center gap-1 rounded-full bg-sun px-3 py-1 label-mono !text-[#0b0b10]">&#9733; Premiado</span>
                @endif
            </div>

            <div class="flex flex-1 flex-col justify-center p-8 md:p-12">
                <div class="flex flex-wrap items-center gap-4">
                    <span class="label-mono text-sun">{{ $featured['subtitle'] ?: $featured['title'] }}</span>
                    <span class="label-mono text-mutedDim">Destaque</span>
                </div>
                <h3 class="mt-6 text-3xl font-extrabold text-ink md:text-4xl">{{ $featured['title'] }}</h3>
                <p class="mt-5 max-w-2xl text-sm leading-relaxed text-muted md:text-base">{{ $featured['excerpt'] }}</p>

                <div class="mt-8 flex flex-wrap items-center justify-between gap-6">
                    <div class="flex flex-wrap gap-2">
                        @foreach(array_slice($featured['tags'], 0, 4) as $tag)
                            <span class="rounded-full border border-border px-3 py-1 text-xs text-muted">{{ $tag }}</span>
                        @endforeach
                    </div>
                    <span class="text-sm font-semibold text-sun transition-transform group-hover:translate-x-1">Ver estudo de caso &rarr;</span>
                </div>
            </div>
        </a>

        {{-- Grade dos demais projetos --}}
        <div class="mt-6 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
            @foreach($rest as $i => $project)
                <x-project-card :project="$project" :accent="$accents[$i % count($accents)]" />
            @endforeach
        </div>
    @else
        <div class="rounded-2xl border border-dashed border-border bg-surface p-8 text-center text-sm text-muted">
            Ainda não há projetos cadastrados no banco de dados.
        </div>
    @endif
</div>
