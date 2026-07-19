<section id="jornada" class="bg-white/60 py-24">
    <div class="mx-auto max-w-6xl">
        <div class="reveal mb-16 text-center">
            <span class="eyebrow">Minha jornada</span>
        </div>

    </div>

    <div class="mt-16 flex flex-col gap-8 md:gap-10">
        <?php $__currentLoopData = $timeline; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $step): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php
                $isEven  = $index % 2 === 0;
                $isLast  = $index === count($timeline) - 1;
                $bgClass =  'bg-sun';
                $clip    = $isEven
                    ? '[clip-path:polygon(0_0,90%_0,100%_50%,90%_100%,0_100%)]'
                    : '[clip-path:polygon(10%_0,100%_0,100%_100%,10%_100%,0_50%)]';
            ?>

            <div
                class="relative  flex w-full max-w-[70%] flex-col gap-6 px-10 py-10 text-ink md:gap-12 md:px-20 md:py-14
                       <?php echo e($bgClass . ' ' . $clip . ' md:flex-row md:items-center mr-auto' . ($isEven ? '' : 'md:flex-row-reverse ml-auto')); ?>"
            >
                
                <div class="flex-1 mx-auto flex max-w-2xl flex-col gap-2 items-center">
                    <p class="text-xs font-semibold uppercase tracking-[0.24em] text-ink/60"><?php echo e($step['period']); ?></p>
                    <h3 class="mt-2 font-display text-2xl font-extrabold text-ink"><?php echo e($step['title']); ?></h3>
                    <p class="mx-auto mt-4 max-w-2xl text-sm leading-7 text-ink/80"><?php echo e($step['desc']); ?></p>

                    <div class="mt-5 flex flex-wrap gap-2 <?php echo e($isLast ? 'justify-center' : ''); ?>">
                        <?php $__currentLoopData = $step['tags']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <span class="rounded-full border border-ink/15 bg-white/50 px-3 py-1 text-[11px] font-semibold uppercase tracking-[0.16em] text-ink/80"><?php echo e($tag); ?></span>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>

                
                <?php if(!empty($step['images'])): ?>
                    <div class="flex shrink-0 gap-3">
                        <?php $__currentLoopData = $step['images']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="h-24 w-24 rounded-2xl bg-ink/10"></div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                <?php endif; ?>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</section>
<?php /**PATH C:\xampp\htdocs\portfolio-kleiton\resources\views/sections/jornada.blade.php ENDPATH**/ ?>