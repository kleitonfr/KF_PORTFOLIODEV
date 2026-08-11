<div>
    <!--[if BLOCK]><![endif]--><?php if(count($projects)): ?>
        <?php
            $featured = $projects[0];
            $rest = array_slice($projects, 1);
            $accents = ['aqua', 'violet', 'pink', 'sun'];
        ?>

        
        <a
            href="<?php echo e(route('projects.show', ['slug' => $featured['slug']])); ?>"
            wire:navigate
            class="group reveal block overflow-hidden rounded-2xl border border-border bg-surface transition-colors hover:border-sun md:flex md:items-stretch"
        >
            <div class="relative aspect-[4/3] w-full overflow-hidden bg-gradient-to-br from-surface2 to-bg md:aspect-auto md:w-2/5">
                <!--[if BLOCK]><![endif]--><?php if(!empty($featured['image'])): ?>
                    <img src="<?php echo e(asset($featured['image'])); ?>" alt="<?php echo e($featured['title']); ?>" class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105" loading="lazy">
                <?php else: ?>
                    <div class="flex h-full items-center justify-center p-8 text-center font-display text-xl font-extrabold text-ink/80"><?php echo e($featured['title']); ?></div>
                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

                <!--[if BLOCK]><![endif]--><?php if(!empty($featured['is_award'])): ?>
                    <span class="absolute left-4 top-4 inline-flex items-center gap-1 rounded-full bg-sun px-3 py-1 label-mono !text-[#0b0b10]">&#9733; Premiado</span>
                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
            </div>

            <div class="flex flex-1 flex-col justify-center p-8 md:p-12">
                <div class="flex flex-wrap items-center gap-4">
                    <span class="label-mono text-sun"><?php echo e($featured['subtitle'] ?: $featured['title']); ?></span>
                    <span class="label-mono text-mutedDim">Destaque</span>
                </div>
                <h3 class="mt-6 text-3xl font-extrabold text-ink md:text-4xl"><?php echo e($featured['title']); ?></h3>
                <p class="mt-5 max-w-2xl text-sm leading-relaxed text-muted md:text-base"><?php echo e($featured['excerpt']); ?></p>

                <div class="mt-8 flex flex-wrap items-center justify-between gap-6">
                    <div class="flex flex-wrap gap-2">
                        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = array_slice($featured['tags'], 0, 4); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <span class="rounded-full border border-border px-3 py-1 text-xs text-muted"><?php echo e($tag); ?></span>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                    </div>
                    <span class="text-sm font-semibold text-sun transition-transform group-hover:translate-x-1">Ver estudo de caso &rarr;</span>
                </div>
            </div>
        </a>

        
        <div class="mt-6 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $rest; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if (isset($component)) { $__componentOriginaldbcceabf4a99a34f9999233ae1fef693 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaldbcceabf4a99a34f9999233ae1fef693 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.project-card','data' => ['project' => $project,'accent' => $accents[$i % count($accents)]]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('project-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['project' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($project),'accent' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($accents[$i % count($accents)])]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaldbcceabf4a99a34f9999233ae1fef693)): ?>
<?php $attributes = $__attributesOriginaldbcceabf4a99a34f9999233ae1fef693; ?>
<?php unset($__attributesOriginaldbcceabf4a99a34f9999233ae1fef693); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaldbcceabf4a99a34f9999233ae1fef693)): ?>
<?php $component = $__componentOriginaldbcceabf4a99a34f9999233ae1fef693; ?>
<?php unset($__componentOriginaldbcceabf4a99a34f9999233ae1fef693); ?>
<?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
        </div>
    <?php else: ?>
        <div class="rounded-2xl border border-dashed border-border bg-surface p-8 text-center text-sm text-muted">
            Ainda não há projetos cadastrados no banco de dados.
        </div>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
</div>
<?php /**PATH C:\xampp\htdocs\portfolio-kleiton\resources\views/livewire/project-gallery.blade.php ENDPATH**/ ?>