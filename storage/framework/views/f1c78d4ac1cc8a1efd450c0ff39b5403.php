<section id="jornada" class="bg-white/60 px-6 py-24 md:px-12">
    <div class="mx-auto max-w-6xl">
        <div class="reveal mb-16 text-center">
            <span class="eyebrow">Minha jornada</span>
            <h2 class="section-title mt-4">Uma trajetória construída com intenção</h2>
            <p class="mx-auto mt-4 max-w-2xl leading-relaxed text-muted">
                As setas aparecem conforme você avança na página, refletindo o sentido do movimento e a continuidade da evolução profissional.
            </p>
        </div>

        <div class="relative space-y-10">
            <?php $__currentLoopData = $timeline; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $step): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="reveal flex items-start gap-4 <?php echo e($index % 2 === 0 ? 'justify-start' : 'justify-end'); ?>">
                    <div class="max-w-xl rounded-[28px] border border-ink/10 bg-cream p-6 shadow-sm">
                        <div class="flex items-center gap-3">
                            <span class="inline-flex h-10 w-10 items-center justify-center rounded-full border border-sun/40 bg-sun/20 font-mono text-sm font-semibold text-ink"><?php echo e($index + 1); ?></span>
                            <div>
                                <p class="text-xs font-semibold uppercase tracking-[0.24em] text-muted"><?php echo e($step['period']); ?></p>
                                <h3 class="mt-1 font-display text-xl font-semibold text-ink"><?php echo e($step['title']); ?></h3>
                            </div>
                        </div>
                        <p class="mt-4 text-sm leading-7 text-muted"><?php echo e($step['desc']); ?></p>
                        <div class="mt-4 flex flex-wrap gap-2">
                            <?php $__currentLoopData = $step['tags']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <span class="rounded-full border border-ink/10 bg-white px-3 py-1 text-[11px] font-semibold uppercase tracking-[0.16em] text-muted"><?php echo e($tag); ?></span>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                    <div class="flex h-10 w-10 items-center justify-center rounded-full border border-ink/10 bg-white text-2xl shadow-sm">
                        <?php echo e($index % 2 === 0 ? '→' : '←'); ?>

                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>
<?php /**PATH C:\xampp\htdocs\portfolio-kleiton\resources\views/sections/jornada.blade.php ENDPATH**/ ?>