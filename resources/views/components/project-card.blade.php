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

        @if(!empty($project['is_award']))
            <span class="project-card-v2-award">&#9733; Premiado</span>
        @endif
    </div>

    <div class="project-card-v2-body">
        <h3 class="project-card-v2-title">{{ $project['title'] }}</h3>
        <p class="project-card-v2-desc">{{ $project['excerpt'] }}</p>

        @if(!empty($project['tags']))
            <div class="project-card-v2-tags">
                @foreach(array_slice($project['tags'], 0, 3) as $tag)
                    <span>{{ $tag }}</span>
                @endforeach
            </div>
        @endif
    </div>
</a>
