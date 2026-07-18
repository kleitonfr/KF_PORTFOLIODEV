@props(['skill' => []])

<div class="skill-card reveal group">
    @if($skill[0] === 'devicon')
        <i class="{{ $skill[1] }} text-3xl mb-3 group-hover:scale-110 transition-transform duration-300"></i>
    @else
        <span class="text-3xl mb-3 block group-hover:scale-110 transition-transform duration-300">{{ $skill[1] }}</span>
    @endif
    <span class="font-semibold text-sm text-ink block">{{ $skill[2] }}</span>
    <span class="text-xs text-muted mt-1 block">{{ $skill[3] }}</span>
</div>
