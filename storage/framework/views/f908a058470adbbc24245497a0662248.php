<section id="depoimentos" class="border-b border-border bg-surface px-6 py-24 md:px-12 md:py-32">
    <div class="mx-auto max-w-6xl">
        <div class="reveal">
            <?php if (isset($component)) { $__componentOriginal1289ed7a7566caee9d9374ccbe752a3b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1289ed7a7566caee9d9374ccbe752a3b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.section-label','data' => ['index' => '02']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('section-label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['index' => '02']); ?>Quem viveu de perto <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1289ed7a7566caee9d9374ccbe752a3b)): ?>
<?php $attributes = $__attributesOriginal1289ed7a7566caee9d9374ccbe752a3b; ?>
<?php unset($__attributesOriginal1289ed7a7566caee9d9374ccbe752a3b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1289ed7a7566caee9d9374ccbe752a3b)): ?>
<?php $component = $__componentOriginal1289ed7a7566caee9d9374ccbe752a3b; ?>
<?php unset($__componentOriginal1289ed7a7566caee9d9374ccbe752a3b); ?>
<?php endif; ?>
        </div>
        <h2 class="reveal mt-6 max-w-3xl text-4xl font-extrabold text-balance text-ink md:text-6xl">
            Depoimentos
        </h2>
        <p class="reveal mt-5 max-w-2xl text-muted">
            Mensagens reais de gestão, time e hackathon
        </p>

        <div class="reveal comments-grid mt-14">
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
<?php /**PATH D:\xampp\htdocs\Laravel\resources\views/sections/depoimentos.blade.php ENDPATH**/ ?>