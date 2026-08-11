@php
    $steps = collect($timeline ?? [])->filter(fn ($step) => !empty($step['title']))->values();
@endphp

<section id="curiosidades" class="border-b border-border bg-bg px-6 py-24 md:px-12 md:py-32">
    <div class="mx-auto max-w-6xl">
        <div class="reveal">
            <x-section-label index="03">Outras curiosidades</x-section-label>
        </div>
        <h2 class="reveal mt-6 max-w-3xl text-4xl font-extrabold text-balance text-ink md:text-6xl">
            Minha jornada profissional
        </h2>
        <p class="reveal mt-5 max-w-xl text-muted">
            Período a período, os passos que me trouxeram até aqui.
        </p>
        <div class="curio-track mt-10 md:mt-14 md:border-t md:border-border">
            @foreach($steps as $step)
                <div class="curio-card reveal md:grid md:grid-cols-12 md:gap-6 md:border-b md:border-border md:py-10">
                    <span class="label-mono md:col-span-3">{{ $step['period'] }}</span>

                    <div class="mt-3 md:col-span-6 md:mt-0">
                        <h3 class="text-xl font-bold text-ink">{{ $step['title'] }}</h3>
                        <p class="mt-3 text-sm leading-relaxed text-muted">{{ $step['desc'] }}</p>
                    </div>

                    @if(!empty($step['tags']))
                        <div class="mt-4 flex flex-wrap gap-2 md:col-span-3 md:mt-0 md:justify-end">
                            @foreach($step['tags'] as $tag)
                                <span class="h-fit rounded-full border border-border px-3 py-1 text-[11px] text-muted">{{ $tag }}</span>
                            @endforeach
                        </div>
                    @endif
                </div>
            @endforeach
        </div>
    </div>
</section>
