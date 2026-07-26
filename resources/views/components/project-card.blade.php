@props(['project' => []])

<a
    href="{{ route('projects.show', ['slug' => $project['slug']]) }}"
    wire:navigate
    class="project-card-v2 reveal"
>
    <div class="project-card-v2-media">
        @if(!empty($project['image']))
            <img src="{{ asset($project['image']) }}" alt="{{ $project['title'] }}">
        @else
            <span class="project-card-v2-media-label">{{ $project['title'] }}</span>
        @endif
    </div>

    <div class="project-card-v2-body">
        <h3 class="project-card-v2-title">{{ $project['title'] }}</h3>
        <p class="project-card-v2-desc">{{ $project['excerpt'] }}</p>
    </div>
</a>
