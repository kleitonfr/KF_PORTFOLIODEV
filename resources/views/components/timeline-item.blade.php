@props(['step' => []])

@php
    $cardClass  = 'timeline-card';
    $cardClass .= !empty($step['highlight']) ? ' timeline-card-highlight' : '';
    $cardClass .= !empty($step['dashed'])    ? ' border-dashed'           : '';
@endphp

<div class="timeline-item reveal">
    <div class="timeline-dot" style="background: {{ $step['color'] }}"></div>
    <div class="{{ $cardClass }}">
        <span class="timeline-year">{{ $step['period'] }}</span>
        <h3 class="timeline-title">{!! $step['title'] !!}</h3>
        <p class="timeline-desc">{!! $step['desc'] !!}</p>
        <div class="timeline-tags">
            @foreach($step['tags'] as $tag)
                <span>{{ $tag }}</span>
            @endforeach
        </div>
    </div>
</div>
