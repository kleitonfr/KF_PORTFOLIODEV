<section id="hero" class="relative flex min-h-screen items-center overflow-hidden px-6 pb-20 pt-24 md:px-12">


    <div class="relative z-10 mx-auto grid w-full max-w-6xl items-center gap-16 md:grid-cols-[1.05fr_0.95fr]">
        <div class="reveal">
            <span
                class="mb-6 inline-block rounded-full bg-sun/80 px-4 py-2 font-bold text-xs uppercase tracking-[0.28em] text-black">
                Desenvolvedor Full Stack
            </span>

            <h1
                class="mb-5 font-display whitespace-nowrap text-4xl font-extrabold leading-tight md:text-5xl lg:text-6xl">
                Kleiton Ferreira
            </h1>

            <p class="mb-3 max-w-xl text-xl font-medium leading-relaxed text-muted">
                Uma jornada construída passo a passo.
            </p>
            <p class="mb-8 max-w-xl text-base leading-relaxed text-muted">
                Comecei resolvendo problemas de pessoas. Hoje desenvolvo sistemas para elas com impacto direto na vida
                de cidadãos e no funcionamento de instituições públicas.
            </p>

            <div class="flex flex-wrap gap-4">
                <a href="#projetos"
                    class="rounded-full bg-black px-7 py-3.5 font-semibold text-white transition duration-300 hover:bg-sun hover:text-black">
                    Ver projetos
                </a>
                <a href="{{ $contact['linkedin'] }}" target="_blank" rel="noopener noreferrer"
                    class="rounded-full border-2 border-black px-7 py-3.5 font-semibold transition duration-300 hover:border-sun hover:bg-sun hover:text-black">
                    LinkedIn
                </a>
            </div>

            <div class="mt-12 flex flex-wrap gap-12 border-t border-black/10 pt-8">

                <div>
                    <h3 class="font-display text-2xl font-extrabold leading-tight md:text-3xl lg:text-4xl">#1</h3>
                    <p class="mb-8 max-w-xl text-base leading-relaxed text-muted">Ranking em atendimentos<br> 3 meses
                        seguidos</p>
                </div>

                <div>
                    <h3 class="font-display text-2xl font-extrabold leading-tight md:text-3xl lg:text-4xl">🏆</h3>
                    <p class="mb-8 max-w-xl text-base leading-relaxed text-muted">InovaCidade<br> INICIATIVAS 2026</p>
                </div>

                 <div>
                    <h3 class="font-display text-2xl font-extrabold leading-tight md:text-3xl lg:text-4xl">4</h3>
                    <p class="mb-8 max-w-xl text-base leading-relaxed text-muted">Sistemas em<br> produção real</p>
                </div>

            </div>

        </div>

        <div class="reveal flex items-center align-start justify-center" style="animation-delay:.15s">
            <div class="hero-avatar-wrap">
                <div class="hero-avatar-ring-2"></div>
                <div class="hero-avatar-ring"></div>
                <div class="hero-avatar-inner">
                    <img src="{{ asset('img/kleitonF.jpeg') }}" alt="Kleiton Ferreira">
                </div>

                <div class="chip chip-1 animate-[spin_14s_linear_infinite]">Laravel</div>
                <div class="chip chip-2 animate-[spin_18s_linear_infinite_reverse]">PHP</div>
                <div class="chip chip-3 animate-[spin_22s_linear_infinite]">Figma</div>
                <div class="chip chip-4 animate-[spin_16s_linear_infinite_reverse]">🏆 LGPD</div>
            </div>
        </div>
    </div>

    <div class="absolute bottom-8 left-1/2 flex -translate-x-1/2 flex-col items-center gap-2 opacity-25">
        <span class="text-xs font-mono tracking-[0.35em]">scroll</span>
        <div class="h-10 w-px animate-pulse bg-ink"></div>
    </div>
</section>