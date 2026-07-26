<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['socialLinks' => [], 'contact' => []]));

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

foreach (array_filter((['socialLinks' => [], 'contact' => []]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<footer id="contato" class="flow-footer px-6 py-20 text-white md:px-12">
    <div class="mx-auto max-w-3xl text-center">
        <span class="eyebrow border-white/25 bg-white/5 text-white/70">Vamos trabalhar juntos?</span>
        <h2 class="section-title mt-6 text-white">Fale comigo</h2>
        <p class="mx-auto mt-4 max-w-xl text-base leading-relaxed text-white/60">
            Aberto a projetos, parcerias e oportunidades que envolvam tecnologia com propósito.
        </p>

        <div class="mt-10 flex flex-wrap justify-center gap-4">
            <?php if(!empty($contact['email'])): ?>
                <a href="mailto:<?php echo e($contact['email']); ?>" class="btn-cta"><?php echo e($contact['email']); ?></a>
            <?php endif; ?>
            <?php if(!empty($contact['whatsapp'])): ?>
                <a href="<?php echo e($contact['whatsapp']); ?>" target="_blank" rel="noopener noreferrer" class="btn-outline">
                    WhatsApp
                </a>
            <?php endif; ?>
        </div>
    </div>

    <div class="mx-auto mt-16 flex max-w-6xl flex-col gap-8 border-t border-white/10 pt-10 md:flex-row md:items-center md:justify-between">
        <div>
            <p class="font-display text-lg font-semibold text-white">Kleiton Ferreira</p>
            <p class="mt-2 max-w-xl text-sm leading-7 text-white/60">Desenvolvedor full stack com foco em soluções digitais humanas, acessíveis e com impacto social.</p>
        </div>

        <div class="flex flex-wrap gap-3">
            <?php $__currentLoopData = $socialLinks ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a href="<?php echo e($item['url']); ?>" target="_blank" rel="noopener noreferrer" class="rounded-full border border-white/15 px-4 py-2 text-sm font-semibold text-white/80 transition hover:bg-sun hover:text-black hover:border-sun">
                    <?php echo e($item['label']); ?>

                </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>

    <p class="mx-auto mt-10 max-w-6xl font-mono text-xs uppercase tracking-[0.3em] text-white/25">
        <?php echo e($contact['location'] ?? ''); ?> &middot; <?php echo e(date('Y')); ?>

    </p>
</footer>
<?php /**PATH C:\xampp\htdocs\portfolio-kleiton\resources\views/components/footer.blade.php ENDPATH**/ ?>