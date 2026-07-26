<?php
    $steps = collect($timeline ?? [])->filter(fn ($step) => !empty($step['title']))->values();
?>

<section id="curiosidades" class="flow-curiosidades px-6 py-24 md:px-12">
    <div class="mx-auto max-w-6xl">
        <div class="reveal mb-4 text-center">
            <span class="eyebrow border-white/40 bg-white/20">Outras curiosidades</span>
            <h2 class="section-title mt-4 text-white">Minha jornada profissional</h2>
        </div>
        <p class="reveal mx-auto mb-4 max-w-2xl text-center text-sm leading-7 text-white/80">
            Arraste para o lado e acompanhe, período a período, os passos que me trouxeram até aqui.
        </p>
        <p class="curio-hint reveal mb-10 text-center text-white/50">← arraste →</p>
    </div>

    <div class="curio-track mx-auto max-w-full px-6 md:px-12">
        <?php $__currentLoopData = $steps; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $step): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="curio-card reveal">
                <p class="curio-period"><?php echo e($step['period']); ?></p>
                <h3 class="curio-title"><?php echo e($step['title']); ?></h3>
                <p class="curio-desc"><?php echo e($step['desc']); ?></p>

                <?php if(!empty($step['tags'])): ?>
                    <div class="curio-tags">
                        <?php $__currentLoopData = $step['tags']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <span><?php echo e($tag); ?></span>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                <?php endif; ?>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</section>
<?php /**PATH C:\xampp\htdocs\portfolio-kleiton\resources\views/sections/outras-curiosidades.blade.php ENDPATH**/ ?>