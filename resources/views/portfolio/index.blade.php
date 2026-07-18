<x-layouts.app>
    @php
        $heroStats = $hero['highlights'] ?? [];
    @endphp
    
    @include('sections.hero', ['stats' => $heroStats, 'contact' => [
        'linkedin' => $contact['linkedin'] ?? '',
    ]])

    @include('sections.jornada', ['timeline' => $journey])

    <section id="skills" class="px-6 py-24 md:px-12">
        <div class="mx-auto max-w-6xl rounded-[32px] border border-ink/10 bg-white/70 p-8 shadow-sm">
            <div class="reveal text-center">
                <span class="eyebrow">Stack e abordagem</span>
                <h2 class="section-title mt-4">Ferramentas e princípios que constroem cada solução</h2>
            </div>
            <div class="mt-12 grid gap-6 md:grid-cols-2">
                <div class="rounded-[24px] border border-ink/10 bg-cream p-6">
                    <h3 class="font-display text-2xl font-semibold text-ink">Arquitetura</h3>
                    <p class="mt-3 text-sm leading-7 text-muted">Organização com responsabilidade única, separação de camadas e foco em reutilização para facilitar manutenção.</p>
                </div>
                <div class="rounded-[24px] border border-ink/10 bg-cream p-6">
                    <h3 class="font-display text-2xl font-semibold text-ink">Stack</h3>
                    <p class="mt-3 text-sm leading-7 text-muted">Laravel, Livewire, Tailwind, SQLite e serviços bem definidos para garantir clareza e evolução.</p>
                </div>
            </div>
        </div>
    </section>

    @include('sections.projetos', ['projects' => $projects])

    @include('sections.contato', ['contact' => $contact])
</x-layouts.app>
