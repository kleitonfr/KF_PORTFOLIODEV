<?php if (isset($component)) { $__componentOriginal5863877a5171c196453bfa0bd807e410 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5863877a5171c196453bfa0bd807e410 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.app','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts.app'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <section class="px-6 py-24 md:px-12">
        <div class="mx-auto max-w-5xl rounded-[36px] border border-ink/10 bg-white p-8 shadow-xl">
            <div class="mb-8">
                <a href="<?php echo e(route('home')); ?>#projetos" class="text-sm font-semibold uppercase tracking-[0.2em] text-muted">← Voltar ao portfólio</a>
                <h1 class="mt-4 font-display text-4xl font-semibold text-ink"><?php echo e($project['title']); ?></h1>
                <p class="mt-3 text-lg leading-8 text-muted"><?php echo e($project['subtitle']); ?></p>
            </div>

            <div class="grid gap-8 lg:grid-cols-[1.2fr_0.8fr]">
                <div class="rounded-[28px] border border-ink/10 bg-cream p-8">
                    <p class="text-xs font-semibold uppercase tracking-[0.28em] text-sun">Modelo de artigo</p>
                    <p class="mt-4 text-sm leading-8 text-muted"><?php echo e($project['description']); ?></p>
                    <div class="mt-8 rounded-[24px] border border-dashed border-ink/15 bg-white/70 p-6">
                        <p class="text-sm font-semibold text-ink">Espaço para inserir:</p>
                        <ul class="mt-4 space-y-3 text-sm leading-7 text-muted">
                            <li>• contexto do problema</li>
                            <li>• processo e decisões</li>
                            <li>• resultados e impacto</li>
                            <li>• imagens e screenshots</li>
                        </ul>
                    </div>
                </div>

                <div class="space-y-6">
                    <div class="rounded-[28px] border border-ink/10 bg-ink p-6 text-cream">
                        <p class="text-xs font-semibold uppercase tracking-[0.26em] text-sun">Tags</p>
                        <div class="mt-4 flex flex-wrap gap-2">
                            <?php $__currentLoopData = $project['tags']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <span class="rounded-full border border-white/10 bg-white/10 px-3 py-2 text-[11px] font-semibold uppercase tracking-[0.16em] text-cream/80"><?php echo e($tag); ?></span>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>

                    <div class="rounded-[28px] border border-ink/10 bg-white p-6">
                        <p class="text-xs font-semibold uppercase tracking-[0.26em] text-muted">Pronto para customizar</p>
                        <p class="mt-3 text-sm leading-7 text-muted">Este modelo foi criado para que você substitua o texto, adicione imagens e personalize a narrativa do projeto com liberdade.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5863877a5171c196453bfa0bd807e410)): ?>
<?php $attributes = $__attributesOriginal5863877a5171c196453bfa0bd807e410; ?>
<?php unset($__attributesOriginal5863877a5171c196453bfa0bd807e410); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5863877a5171c196453bfa0bd807e410)): ?>
<?php $component = $__componentOriginal5863877a5171c196453bfa0bd807e410; ?>
<?php unset($__componentOriginal5863877a5171c196453bfa0bd807e410); ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\portfolio-kleiton\resources\views/portfolio/project.blade.php ENDPATH**/ ?>