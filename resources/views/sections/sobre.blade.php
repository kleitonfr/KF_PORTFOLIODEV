<section class="py-24 px-6 md:px-12">
    <div class="max-w-5xl mx-auto grid md:grid-cols-2 gap-16 items-center">

        <div class="reveal">
            <span class="eyebrow">Sobre mim</span>
            <h2 class="section-title mt-4 mb-6">Curiosidade como<br/>motor de tudo</h2>
            <p class="text-muted leading-relaxed mb-4">
                Comecei minha trajetória resolvendo problemas de pessoas — na saúde pública, no atendimento,
                na pesquisa acadêmica. Cada experiência me ensinou algo que nenhum curso ensinaria sozinho:
                a importância de entender quem vai usar aquilo que você cria.
            </p>
            <p class="text-muted leading-relaxed mb-4">
                Hoje, como desenvolvedor e designer, carrego essa perspectiva em cada linha de código.
                A tecnologia é o meio. O impacto nas pessoas é o objetivo.
            </p>
            <p class="text-muted leading-relaxed">
                Sou diligente, visionário e apaixonado por aprender. Prefiro perguntas difíceis a respostas fáceis.
                E acredito que os melhores sistemas são os que ninguém percebe que existem — porque funcionam exatamente como deveriam.
            </p>
        </div>

        <div class="grid grid-cols-2 gap-4">
            @foreach($values as [$emoji, $label])
                <div class="value-chip reveal">
                    <span class="text-xl">{{ $emoji }}</span>
                    <span class="text-sm font-semibold text-ink">{{ $label }}</span>
                </div>
            @endforeach
        </div>

    </div>
</section>
