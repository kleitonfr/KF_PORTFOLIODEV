<x-layouts.app :socialLinks="$socialLinks ?? []" :contact="$contact ?? []">
    @include('sections.hero', ['contact' => [
        'linkedin' => $contact['linkedin'] ?? '',
    ]])

    @include('sections.depoimentos', ['testimonials' => $testimonials])

    @include('sections.projetos')

    @include('sections.outras-curiosidades', ['timeline' => $journey])
</x-layouts.app>
