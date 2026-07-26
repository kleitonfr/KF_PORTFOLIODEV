@php
    $steps = collect($timeline ?? [])->filter(fn ($step) => !empty($step['title']))->values();
@endphp

<section id="curiosidades" class="flow-curiosidades px-6 py-24 md:px-12">
    <div class="mx-auto max-w-6xl">
        <div class="reveal mb-4 text-center">
            <span class="eyebrow border-white/40 bg-white/20">Outras curiosidades</span>
            <h2 class="section-title mt-4 text-white">Minha jornada profissional</h2>
        </div>
        <p class="reveal mx-auto mb-4 max-w-2xl text-center text-sm leading-7 text-white/80">
            Arraste para o lado e acompanhe, período a período, os passos que me trouxeram até aqui.
        </p>
        <p class="curio-hint reveal mb-10 text-center text-white/50">← arraste →</p>
    </div>

    <div class="curio-track mx-auto max-w-full px-6 md:px-12">
        @foreach($steps as $step)
            <div class="curio-card reveal">
                <p class="curio-period">{{ $step['period'] }}</p>
                <h3 class="curio-title">{{ $step['title'] }}</h3>
                <p class="curio-desc">{{ $step['desc'] }}</p>

                @if(!empty($step['tags']))
                    <div class="curio-tags">
                        @foreach($step['tags'] as $tag)
                            <span>{{ $tag }}</span>
                        @endforeach
                    </div>
                @endif
            </div>
        @endforeach
    </div>
</section>
