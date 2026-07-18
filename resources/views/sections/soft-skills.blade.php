<section class="py-16 px-6 md:px-12 bg-white/60">
    <div class="max-w-5xl mx-auto">

        <div class="reveal mb-12 text-center">
            <span class="eyebrow">Soft Skills</span>
            <h2 class="section-title mt-4">Como eu trabalho</h2>
        </div>

        <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-5">
            @foreach($softSkills as [$emoji, $title, $desc])
                <div class="soft-card reveal">
                    <span class="text-2xl mb-3 block">{{ $emoji }}</span>
                    <h3 class="font-display font-bold text-base mb-2 text-ink">{{ $title }}</h3>
                    <p class="text-muted text-sm leading-relaxed">{{ $desc }}</p>
                </div>
            @endforeach
        </div>

    </div>
</section>
