<x-layouts.app :socialLinks="$socialLinks ?? []" :contact="$contact ?? []" :title="$project['title'] . ' — Kleiton Ferreira'">
    <article class="flow-projetos px-6 py-24 md:px-12">
        <div class="mx-auto max-w-4xl">

            <a href="{{ route('home') }}#projetos" wire:navigate class="text-sm font-semibold uppercase tracking-[0.2em] text-muted transition hover:text-sun">
                &larr; Voltar aos projetos
            </a>

            <div class="article-cover mt-8">
                @if(!empty($project['image']))
                    <img src="{{ asset($project['image']) }}" alt="{{ $project['title'] }}">
                @else
                    <span class="article-cover-label">{{ $project['title'] }}</span>
                @endif
            </div>

            <header class="mt-10">
                @if(!empty($project['subtitle']))
                    <p class="eyebrow">{{ $project['subtitle'] }}</p>
                @endif
                <h1 class="section-title mt-4">{{ $project['title'] }}</h1>

                @if($project['is_award'] && !empty($project['award_label']))
                    <div class="article-award">
                        <span>&#9733;</span> {{ $project['award_label'] }}
                    </div>
                @endif

                {{-- Barra de metadados: papel, ano, status, cliente --}}
                @if(array_filter([$project['role'], $project['year'], $project['status'], $project['client']]))
                    <div class="article-meta">
                        @if(!empty($project['role']))
                            <div class="article-meta-item">
                                <span class="article-meta-label">Papel</span>
                                <span class="article-meta-value">{{ $project['role'] }}</span>
                            </div>
                        @endif
                        @if(!empty($project['year']))
                            <div class="article-meta-item">
                                <span class="article-meta-label">Período</span>
                                <span class="article-meta-value">{{ $project['year'] }}</span>
                            </div>
                        @endif
                        @if(!empty($project['status']))
                            <div class="article-meta-item">
                                <span class="article-meta-label">Status</span>
                                <span class="article-meta-value">{{ $project['status'] }}</span>
                            </div>
                        @endif
                        @if(!empty($project['client']))
                            <div class="article-meta-item">
                                <span class="article-meta-label">Cliente</span>
                                <span class="article-meta-value">{{ $project['client'] }}</span>
                            </div>
                        @endif
                    </div>
                @endif

                {{-- Ações: site em produção, publicação no LinkedIn, repositório --}}
                @if(!empty($project['external_url']) || !empty($project['linkedin_url']) || !empty($project['repo_url']))
                    <div class="article-links mt-6">
                        @if(!empty($project['external_url']))
                            <a href="{{ $project['external_url'] }}" target="_blank" rel="noopener noreferrer" class="btn-sm">
                                Acessar o site &nearr;
                            </a>
                        @endif
                        @if(!empty($project['linkedin_url']))
                            <a href="{{ $project['linkedin_url'] }}" target="_blank" rel="noopener noreferrer" class="btn-sm">
                                Ver publicação no LinkedIn &nearr;
                            </a>
                        @endif
                        @if(!empty($project['repo_url']))
                            <a href="{{ $project['repo_url'] }}" target="_blank" rel="noopener noreferrer" class="btn-sm">
                                Ver repositório &nearr;
                            </a>
                        @endif
                    </div>
                @endif
            </header>

            <div class="article-body mt-12">

                @if(!empty($project['excerpt']))
                    <section class="article-section">
                        <p>{{ $project['excerpt'] }}</p>
                    </section>
                @endif

                @if(!empty($project['description']))
                    <section class="article-section">
                        <span class="article-section-label">Visão geral</span>
                        <p>{{ $project['description'] }}</p>
                    </section>
                @endif

                @php
                    $narrative = [
                        'context'    => ['label' => 'Contexto',            'value' => $project['context']    ?? null],
                        'problem'    => ['label' => 'Problema & desafio',  'value' => $project['problem']    ?? null],
                        'objective'  => ['label' => 'Objetivo',            'value' => $project['objective']  ?? null],
                        'solution'   => ['label' => 'Solução',             'value' => $project['solution']   ?? null],
                        'process'    => ['label' => 'Processo',            'value' => $project['process']    ?? null],
                        'decisions'  => ['label' => 'Decisões relevantes', 'value' => $project['decisions']  ?? null],
                        'result'     => ['label' => 'Resultado',          'value' => $project['result']      ?? null],
                        'learnings'  => ['label' => 'Aprendizados',        'value' => $project['learnings']  ?? null],
                    ];
                @endphp

                @foreach ($narrative as $block)
                    @if(!empty($block['value']))
                        <section class="article-section">
                            <span class="article-section-label">{{ $block['label'] }}</span>
                            <p>{{ $block['value'] }}</p>
                        </section>
                    @endif
                @endforeach

                {{-- Vídeo demonstrativo --}}
                @if(!empty($project['video']))
                    <section class="article-section">
                        <span class="article-section-label">Demonstração</span>
                        <div class="article-gallery-item is-wide">
                            <video src="{{ asset($project['video']) }}" controls preload="metadata" class="w-full"></video>
                        </div>
                    </section>
                @endif

                {{-- Galeria de imagens (exclui a capa, já exibida no topo) --}}
                @php
                    $galleryItems = collect($project['gallery'] ?? [])
                        ->filter(fn ($item) => ($item['path'] ?? null) !== ($project['image'] ?? null))
                        ->values();
                @endphp
                @if($galleryItems->isNotEmpty())
                    <section class="article-section">
                        <span class="article-section-label">Galeria</span>
                        <div class="article-gallery">
                            @foreach ($galleryItems as $item)
                                <div>
                                    <div class="article-gallery-item @if(($item['type'] ?? null) === 'before_after') is-wide @endif">
                                        <img src="{{ asset($item['path']) }}" alt="{{ $item['caption'] ?? $project['title'] }}" loading="lazy">
                                    </div>
                                    @if(!empty($item['caption']))
                                        <p class="article-gallery-caption">{{ $item['caption'] }}</p>
                                    @endif
                                </div>
                            @endforeach
                        </div>
                    </section>
                @endif

                @if(!empty($project['tags']))
                    <section class="article-section">
                        <span class="article-section-label">Stack &amp; tecnologias</span>
                        <div class="flex flex-wrap gap-2">
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
