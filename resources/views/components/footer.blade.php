@props(['socialLinks' => [], 'contact' => []])

<footer class="border-t border-border bg-bg px-6 py-14 md:px-12">
    <div class="mx-auto flex max-w-6xl flex-col gap-8 md:flex-row md:items-end md:justify-between">
        <div class="max-w-md">
            <p class="font-display text-lg font-bold text-ink">Kleiton Ferreira</p>
            <p class="mt-2 text-sm leading-relaxed text-muted">
                Desenvolvedor full stack com foco em soluções digitais humanas, acessíveis e com impacto social.
            </p>
        </div>

        <div class="flex flex-wrap gap-3">
            @foreach($socialLinks ?? [] as $item)
                <a href="{{ $item['url'] }}" target="_blank" rel="noopener noreferrer" class="rounded-full border border-border px-4 py-2 text-sm text-muted transition-colors hover:border-sun hover:text-sun">
                    {{ $item['label'] }}
                </a>
            @endforeach
        </div>
    </div>

    <p class="label-mono mx-auto mt-10 max-w-6xl text-mutedDim">
        {{ $contact['location'] ?? '' }} &middot; {{ date('Y') }}
    </p>
</footer>
