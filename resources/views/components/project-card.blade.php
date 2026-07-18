@props([
    'project' => [],
])

@php
    $tagStyleMap = [
        'default' => 'project-tag',
        'award'   => 'project-tag award-tag',
        'live'    => 'project-tag live-tag',
    ];
@endphp

<div class="project-card reveal">

    {{-- Thumb --}}
    <div class="project-thumb" style="background: {{ $project['thumb_bg'] }}">
        <div class="project-thumb-inner">
            <span class="text-5xl">{{ $project['emoji'] }}</span>
            <span class="font-display font-extrabold text-white text-lg mt-2 drop-shadow">
                {{ $project['name'] }}
            </span>
            <span class="text-xs font-mono mt-1 {{ $project['thumb_sub_color'] }}">
                {{ $project['thumb_sub'] }}
            </span>
        </div>
    </div>

    {{-- Body --}}
    <div class="project-body">

        {{-- Tags --}}
        <div class="flex flex-wrap gap-2 mb-3">
            @foreach($project['tags'] as $i => $tag)
                <span class="{{ $tagStyleMap[$project['tag_styles'][$i] ?? 'default'] }}">
                    {{ $tag }}
                </span>
            @endforeach
        </div>

        {{-- Título --}}
        <h3 class="font-display font-extrabold text-xl mb-2 text-ink">
            {{ $project['subtitle'] }}
        </h3>

        {{-- Descrição --}}
        <p class="text-muted text-sm leading-relaxed mb-4">
            {{ $project['desc'] }}
        </p>

        {{-- Stack badges --}}
        <div class="flex flex-wrap gap-1.5 mb-4">
            @foreach($project['stack'] as $tech)
                <span class="stack-badge">{{ $tech }}</span>
            @endforeach
        </div>

        {{-- Impacto ou Extra --}}
        @if($project['impact'])
            <div class="text-sm border-t border-ink/5 pt-4">
                <p>
                    <strong class="text-ink">Impacto:</strong>
                    <span class="text-muted">{{ $project['impact'] }}</span>
                </p>
            </div>
        @elseif($project['extra'])
            <div class="text-sm border-t border-ink/5 pt-4">
                <p>
                    <strong class="text-ink">Destaque técnico:</strong>
                    <span class="text-muted">{{ $project['extra'] }}</span>
                </p>
            </div>
        @endif

        {{-- Rodapé privado --}}
        @if($project['private'])
            <p class="text-xs text-muted/40 mt-4 italic font-mono">
                Repositório privado &middot; {{ $project['contract'] }}
            </p>
        @endif
    </div>
</div>
