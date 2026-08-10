<section id="depoimentos" class="flow-depoimentos px-6 py-24 md:px-12">
    <div class="mx-auto max-w-6xl">
        <div class="reveal mb-4 text-center">
            <span class="eyebrow">Quem viveu de perto</span>
            <h2 class="section-title mt-4">Depoimentos</h2>
        </div>
        <p class="reveal mx-auto mb-12 max-w-2xl text-center text-sm leading-7 text-muted">
            Mensagens reais de gestão, time e hackathon. Clique para ampliar e ler na íntegra.
        </p>

        <div class="reveal comments-grid">
            <?php $__currentLoopData = $testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testimonial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="comment-item">
                    <button
                        type="button"
                        class="comment-frame"
                        data-lightbox-trigger
                        data-lightbox-src="<?php echo e(asset($testimonial['image'])); ?>"
                        aria-label="Ampliar depoimento — <?php echo e($testimonial['role']); ?>"
                    >
                        <img src="<?php echo e(asset($testimonial['image'])); ?>" alt="Depoimento — <?php echo e($testimonial['role']); ?>" loading="lazy">
                    </button>
                    <p class="comment-role"><?php echo e($testimonial['role']); ?></p>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>

    
    <div id="lightbox" class="lightbox-overlay" role="dialog" aria-modal="true" aria-label="Imagem ampliada">
        <button type="button" class="lightbox-close" id="lightboxClose" aria-label="Fechar">&times;</button>
        <img id="lightboxImage" src="" alt="">
    </div>
</section>
<?php /**PATH C:\xampp\htdocs\portfolio-kleiton\resources\views/sections/depoimentos.blade.php ENDPATH**/ ?>