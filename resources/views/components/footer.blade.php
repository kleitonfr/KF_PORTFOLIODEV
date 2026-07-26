@props(['socialLinks' => [], 'contact' => []])

<footer id="contato" class="flow-footer px-6 py-20 text-white md:px-12">
    <div class="mx-auto max-w-3xl text-center">
        <span class="eyebrow border-white/25 bg-white/5 text-white/70">Vamos trabalhar juntos?</span>
        <h2 class="section-title mt-6 text-white">Fale comigo</h2>
        <p class="mx-auto mt-4 max-w-xl text-base leading-relaxed text-white/60">
            Aberto a projetos, parcerias e oportunidades que envolvam tecnologia com propósito.
        </p>

        <div class="mt-10 flex flex-wrap justify-center gap-4">
            @if(!empty($contact['email']))
                <a href="mailto:{{ $contact['email'] }}" class="btn-cta">{{ $contact['email'] }}</a>
            @endif
            @if(!empty($contact['whatsapp']))
                <a href="{{ $contact['whatsapp'] }}" target="_blank" rel="noopener noreferrer" class="btn-outline">
                    WhatsApp
                </a>
            @endif
        </div>
    </div>

    <div class="mx-auto mt-16 flex max-w-6xl flex-col gap-8 border-t border-white/10 pt-10 md:flex-row md:items-center md:justify-between">
        <div>
            <p class="font-display text-lg font-semibold text-white">Kleiton Ferreira</p>
            <p class="mt-2 max-w-xl text-sm leading-7 text-white/60">Desenvolvedor full stack com foco em soluções digitais humanas, acessíveis e com impacto social.</p>
        </div>

        <div class="flex flex-wrap gap-3">
            @foreach($socialLinks ?? [] as $item)
                <a href="{{ $item['url'] }}" target="_blank" rel="noopener noreferrer" class="rounded-full border border-white/15 px-4 py-2 text-sm font-semibold text-white/80 transition hover:bg-sun hover:text-black hover:border-sun">
                    {{ $item['label'] }}
                </a>
            @endforeach
        </div>
    </div>

    <p class="mx-auto mt-10 max-w-6xl font-mono text-xs uppercase tracking-[0.3em] text-white/25">
        {{ $contact['location'] ?? '' }} &middot; {{ date('Y') }}
    </p>
</footer>
