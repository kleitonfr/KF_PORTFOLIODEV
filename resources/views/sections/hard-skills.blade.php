<section id="skills" class="py-24 px-6 md:px-12">
    <div class="max-w-6xl mx-auto">

        <div class="reveal mb-16 text-center">
            <span class="eyebrow">Hard Skills</span>
            <h2 class="section-title mt-4">Ferramentas &amp; Tecnologias</h2>
        </div>

        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-4">
            @foreach($hardSkills as $skill)
                <x-skill-card :skill="$skill" />
            @endforeach
        </div>

    </div>
</section>
