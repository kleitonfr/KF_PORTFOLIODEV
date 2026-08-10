<x-layouts.app :socialLinks="$socialLinks ?? []" :contact="$contact ?? []">
    @include('sections.hero', ['contact' => [
        'linkedin' => $contact['linkedin'] ?? '',
    ]])

    @include('sections.projetos', ['projects' => $projects])

    @include('sections.depoimentos', ['testimonials' => $testimonials])

    @include('sections.outras-curiosidades', ['timeline' => $journey])

    @include('sections.contato', ['contact' => $contact ?? []])
</x-layouts.app>
