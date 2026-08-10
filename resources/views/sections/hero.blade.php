<section id="hero" class="flow-hero relative flex min-h-screen items-center px-6 pb-20 pt-28 md:px-12">

    <div class="relative z-10 mx-auto grid w-full max-w-6xl items-center gap-12 md:grid-cols-[1.05fr_0.95fr] md:gap-16">
        <div class="reveal">
            <span class="mb-6 inline-block rounded-full border border-sun/40 px-4 py-2 text-xs font-bold uppercase tracking-[0.24em] text-sun">
                Desenvolvedor Full Stack
            </span>

            <h1 class="mb-5 font-display text-4xl font-extrabold leading-tight text-gradient md:text-5xl lg:text-6xl">
                Kleiton Ferreira
            </h1>

            <p class="mb-3 max-w-xl text-lg font-medium leading-relaxed text-muted md:text-xl">
                Uma jornada construída passo a passo.
            </p>
            <p class="mb-8 max-w-xl text-base leading-relaxed text-muted">
                Comecei resolvendo problemas de pessoas. Hoje desenvolvo sistemas para elas com impacto direto na vida
                de cidadãos e no funcionamento de instituições públicas.
            </p>

            <div class="flex flex-wrap gap-4">
                <a href="#projetos" class="btn-cta">
                    Ver projetos
                </a>
                <a href="{{ $contact['linkedin'] }}" target="_blank" rel="noopener noreferrer" class="btn-outline">
                    LinkedIn
                </a>
            </div>

            <div class="mt-10 flex flex-wrap gap-10 border-t border-border pt-7 md:gap-12">

                <div>
                    <h3 class="font-display text-2xl font-extrabold leading-tight text-ink md:text-3xl lg:text-4xl">#1</h3>
                    <p class="mt-2 max-w-xl text-sm leading-relaxed text-muted md:text-base">Ranking em atendimentos<br> 3 meses seguidos</p>
                </div>

                <div>
                    <h3 class="font-display text-2xl font-extrabold leading-tight text-sun md:text-3xl lg:text-4xl">Prêmio</h3>
                    <p class="mt-2 max-w-xl text-sm leading-relaxed text-muted md:text-base">InovaCidade<br> Iniciativas 2026</p>
                </div>

                <div>
                    <h3 class="font-display text-2xl font-extrabold leading-tight text-ink md:text-3xl lg:text-4xl">4</h3>
                    <p class="mt-2 max-w-xl text-sm leading-relaxed text-muted md:text-base">Sistemas em<br> produção real</p>
                </div>

            </div>

            {{-- ────────────────────────────────────────────────────────────
                 STACK STRIP — faixa de tecnologias (antes: ícones em órbita
                 ao redor da foto). Reaproveitada aqui de forma mais discreta
                 e funcional: monocromática em repouso, ganha cor no hover. --}}
            <div class="stack-strip reveal" style="animation-delay:.1s">
                <span class="stack-strip-label">Stack &amp; ferramentas</span>
                <div class="stack-strip-track">
                    @php
                        $stack = [
                            ['name' => 'Laravel', 'src' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/laravel/laravel-original.svg'],
                            ['name' => 'PHP', 'src' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg'],
                            ['name' => 'JavaScript', 'src' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg'],
                            ['name' => 'HTML5', 'src' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg'],
                            ['name' => 'CSS3', 'src' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original.svg'],
                            ['name' => 'MySQL', 'src' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original.svg'],
                            ['name' => 'PostgreSQL', 'src' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/postgresql/postgresql-original.svg'],
                            ['name' => 'SQLite', 'src' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/sqlite/sqlite-original.svg'],
                            ['name' => 'Git', 'src' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/git/git-original.svg'],
                            ['name' => 'GitHub', 'src' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/github/github-original.svg'],
                            ['name' => 'Figma', 'src' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/figma/figma-original.svg'],
                        ];
                    @endphp
                    @foreach ($stack as $tech)
                        <div class="stack-icon" tabindex="0" aria-label="{{ $tech['name'] }}" title="{{ $tech['name'] }}">
                            <img src="{{ $tech['src'] }}" alt="{{ $tech['name'] }}" loading="lazy" width="26" height="26">
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="reveal flex items-center justify-center" style="animation-delay:.15s">
            <div class="hero-avatar-wrap">
                <div class="hero-avatar-ring"></div>
                <div class="hero-avatar-inner">
                    <img src="{{ asset('img/kleitonF.jpeg') }}" alt="Kleiton Ferreira">
                </div>
            </div>
        </div>
    </div>

    <div class="absolute bottom-8 left-1/2 hidden -translate-x-1/2 flex-col items-center gap-2 opacity-25 md:flex">
        <span class="text-xs font-mono tracking-[0.35em] text-muted">scroll</span>
        <div class="h-10 w-px animate-pulse bg-ink"></div>
    </div>
</section>
