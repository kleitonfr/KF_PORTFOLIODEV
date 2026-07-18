<footer class="mt-20 border-t border-ink/10 bg-ink px-6 py-10 text-sm text-cream/70 md:px-12">
    <div class="mx-auto flex max-w-6xl flex-col gap-6 md:flex-row md:items-center md:justify-between">
        <div>
            <p class="font-display text-xl font-semibold text-white">Kleiton Ferreira</p>
            <p class="mt-2 max-w-xl text-sm leading-7 text-cream/70">Desenvolvedor full stack com foco em soluções digitais humanas, acessíveis e com impacto social.</p>
        </div>

        <div class="flex flex-wrap gap-3">
            <?php $__currentLoopData = $socialLinks ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a href="<?php echo e($item['url']); ?>" target="_blank" rel="noopener noreferrer" class="rounded-full border border-white/15 bg-white/10 px-4 py-2 text-sm font-semibold text-cream/80 transition hover:bg-sun hover:text-ink">
                    <?php echo e($item['label']); ?>

                </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</footer>
<?php /**PATH C:\xampp\htdocs\portfolio-kleiton\resources\views/components/footer.blade.php ENDPATH**/ ?>