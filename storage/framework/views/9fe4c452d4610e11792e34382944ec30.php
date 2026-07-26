<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['project' => []]));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter((['project' => []]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<a
    href="<?php echo e(route('projects.show', ['slug' => $project['slug']])); ?>"
    wire:navigate
    class="project-card-v2 reveal"
>
    <div class="project-card-v2-media">
        <!--[if BLOCK]><![endif]--><?php if(!empty($project['image'])): ?>
            <img src="<?php echo e(asset($project['image'])); ?>" alt="<?php echo e($project['title']); ?>">
        <?php else: ?>
            <span class="project-card-v2-media-label"><?php echo e($project['title']); ?></span>
        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
    </div>

    <div class="project-card-v2-body">
        <h3 class="project-card-v2-title"><?php echo e($project['title']); ?></h3>
        <p class="project-card-v2-desc"><?php echo e($project['excerpt']); ?></p>
    </div>
</a>
<?php /**PATH C:\xampp\htdocs\portfolio-kleiton\resources\views/components/project-card.blade.php ENDPATH**/ ?>