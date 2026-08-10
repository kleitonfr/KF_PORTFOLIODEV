@props(['index' => '01'])

<div {{ $attributes->merge(['class' => 'flex items-center gap-4']) }}>
    <span class="label-mono text-sun">{{ $index }}</span>
    <span class="h-px w-10 rule-spectrum opacity-60"></span>
    <span class="label-mono">{{ $slot }}</span>
</div>
