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
    <?php
        $heroStats = $hero['highlights'] ?? [];
    ?>
    
    <?php echo $__env->make('sections.hero', ['stats' => $heroStats, 'contact' => [
        'linkedin' => $contact['linkedin'] ?? '',
    ]], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <?php echo $__env->make('sections.jornada', ['timeline' => $journey], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <section id="skills" class="px-6 py-24 md:px-12">
        <div class="mx-auto max-w-6xl rounded-[32px] border border-ink/10 bg-white/70 p-8 shadow-sm">
            <div class="reveal text-center">
                <span class="eyebrow">Stack e abordagem</span>
                <h2 class="section-title mt-4">Ferramentas e princípios que constroem cada solução</h2>
            </div>
            <div class="mt-12 grid gap-6 md:grid-cols-2">
                <div class="rounded-[24px] border border-ink/10 bg-cream p-6">
                    <h3 class="font-display text-2xl font-semibold text-ink">Arquitetura</h3>
                    <p class="mt-3 text-sm leading-7 text-muted">Organização com responsabilidade única, separação de camadas e foco em reutilização para facilitar manutenção.</p>
                </div>
                <div class="rounded-[24px] border border-ink/10 bg-cream p-6">
                    <h3 class="font-display text-2xl font-semibold text-ink">Stack</h3>
                    <p class="mt-3 text-sm leading-7 text-muted">Laravel, Livewire, Tailwind, SQLite e serviços bem definidos para garantir clareza e evolução.</p>
                </div>
            </div>
        </div>
    </section>

    <?php echo $__env->make('sections.projetos', ['projects' => $projects], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <?php echo $__env->make('sections.contato', ['contact' => $contact], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
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
<?php /**PATH C:\xampp\htdocs\portfolio-kleiton\resources\views/portfolio/index.blade.php ENDPATH**/ ?>