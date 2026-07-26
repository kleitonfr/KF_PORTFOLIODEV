<x-layouts.app :socialLinks="$socialLinks ?? []" :contact="$contact ?? []" :title="$project['title'] . ' — Kleiton Ferreira'">
    <article class="flow-projetos px-6 py-24 md:px-12">
        <div class="mx-auto max-w-4xl">

            <a href="{{ route('home') }}#projetos" wire:navigate class="text-sm font-semibold uppercase tracking-[0.2em] text-muted transition hover:text-ink">
                Voltar aos projetos
            </a>

            <div class="article-cover mt-8">
                @if(!empty($project['image']))
                    <img src="{{ asset($project['image']) }}" alt="{{ $project['title'] }}">
                @else
                    <span class="article-cover-label">{{ $project['title'] }}</span>
                @endif
            </div>

            <header class="mt-10">
                <p class="eyebrow">{{ $project['subtitle'] }}</p>
                <h1 class="section-title mt-4">{{ $project['title'] }}</h1>
            </header>

            <div class="article-body mt-12">

                <section class="article-section">
                    <p>{{ $project['excerpt'] }}</p>
                </section>

                <section class="article-section">
                    <h2 class="font-display text-2xl font-bold text-ink">Sobre o projeto</h2>
                    <p class="mt-4">{{ $project['description'] }}</p>
                </section>

                @if(!empty($project['tags']))
                    <section class="article-section">
                        <h2 class="font-display text-2xl font-bold text-ink">Stack &amp; tecnologias</h2>
                        <div class="mt-4 flex flex-wrap gap-2">
                            @foreach($project['tags'] as $tag)
                                <span class="article-tag">{{ $tag }}</span>
                            @endforeach
                        </div>
                    </section>
                @endif

            </div>
        </div>
    </article>
</x-layouts.app>
