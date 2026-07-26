<x-layouts.app :socialLinks="$socialLinks ?? []" :contact="$contact ?? []">
    @php
        $heroStats = $hero['highlights'] ?? [];
    @endphp

    @include('sections.hero', ['stats' => $heroStats, 'contact' => [
        'linkedin' => $contact['linkedin'] ?? '',
    ]])

    @include('sections.projetos', ['projects' => $projects])

    @include('sections.outras-curiosidades', ['timeline' => $journey])
</x-layouts.app>
