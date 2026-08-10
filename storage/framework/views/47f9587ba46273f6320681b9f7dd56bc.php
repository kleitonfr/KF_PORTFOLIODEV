<?php if (isset($component)) { $__componentOriginal5863877a5171c196453bfa0bd807e410 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5863877a5171c196453bfa0bd807e410 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.app','data' => ['socialLinks' => $socialLinks ?? [],'contact' => $contact ?? [],'title' => $project['title'] . ' — Kleiton Ferreira']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts.app'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['socialLinks' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($socialLinks ?? []),'contact' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($contact ?? []),'title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($project['title'] . ' — Kleiton Ferreira')]); ?>
    <article class="flow-projetos px-6 py-24 md:px-12">
        <div class="mx-auto max-w-4xl">

            <a href="<?php echo e(route('home')); ?>#projetos" wire:navigate class="text-sm font-semibold uppercase tracking-[0.2em] text-muted transition hover:text-sun">
                &larr; Voltar aos projetos
            </a>

            <div class="article-cover mt-8">
                <?php if(!empty($project['image'])): ?>
                    <img src="<?php echo e(asset($project['image'])); ?>" alt="<?php echo e($project['title']); ?>">
                <?php else: ?>
                    <span class="article-cover-label"><?php echo e($project['title']); ?></span>
                <?php endif; ?>
            </div>

            <header class="mt-10">
                <?php if(!empty($project['subtitle'])): ?>
                    <p class="eyebrow"><?php echo e($project['subtitle']); ?></p>
                <?php endif; ?>
                <h1 class="section-title mt-4"><?php echo e($project['title']); ?></h1>

                <?php if($project['is_award'] && !empty($project['award_label'])): ?>
                    <div class="article-award">
                        <span>&#9733;</span> <?php echo e($project['award_label']); ?>

                    </div>
                <?php endif; ?>

                
                <?php if(array_filter([$project['role'], $project['year'], $project['status'], $project['client']])): ?>
                    <div class="article-meta">
                        <?php if(!empty($project['role'])): ?>
                            <div class="article-meta-item">
                                <span class="article-meta-label">Papel</span>
                                <span class="article-meta-value"><?php echo e($project['role']); ?></span>
                            </div>
                        <?php endif; ?>
                        <?php if(!empty($project['year'])): ?>
                            <div class="article-meta-item">
                                <span class="article-meta-label">Período</span>
                                <span class="article-meta-value"><?php echo e($project['year']); ?></span>
                            </div>
                        <?php endif; ?>
                        <?php if(!empty($project['status'])): ?>
                            <div class="article-meta-item">
                                <span class="article-meta-label">Status</span>
                                <span class="article-meta-value"><?php echo e($project['status']); ?></span>
                            </div>
                        <?php endif; ?>
                        <?php if(!empty($project['client'])): ?>
                            <div class="article-meta-item">
                                <span class="article-meta-label">Cliente</span>
                                <span class="article-meta-value"><?php echo e($project['client']); ?></span>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>

                
                <?php if(!empty($project['external_url']) || !empty($project['linkedin_url']) || !empty($project['repo_url'])): ?>
                    <div class="article-links mt-6">
                        <?php if(!empty($project['external_url'])): ?>
                            <a href="<?php echo e($project['external_url']); ?>" target="_blank" rel="noopener noreferrer" class="btn-sm">
                                Acessar o site &nearr;
                            </a>
                        <?php endif; ?>
                        <?php if(!empty($project['linkedin_url'])): ?>
                            <a href="<?php echo e($project['linkedin_url']); ?>" target="_blank" rel="noopener noreferrer" class="btn-sm">
                                Ver publicação no LinkedIn &nearr;
                            </a>
                        <?php endif; ?>
                        <?php if(!empty($project['repo_url'])): ?>
                            <a href="<?php echo e($project['repo_url']); ?>" target="_blank" rel="noopener noreferrer" class="btn-sm">
                                Ver repositório &nearr;
                            </a>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            </header>

            <div class="article-body mt-12">

                <?php if(!empty($project['excerpt'])): ?>
                    <section class="article-section">
                        <p><?php echo e($project['excerpt']); ?></p>
                    </section>
                <?php endif; ?>

                <?php if(!empty($project['description'])): ?>
                    <section class="article-section">
                        <span class="article-section-label">Visão geral</span>
                        <p><?php echo e($project['description']); ?></p>
                    </section>
                <?php endif; ?>

                <?php
                    $narrative = [
                        'context'    => ['label' => 'Contexto',            'value' => $project['context']    ?? null],
                        'problem'    => ['label' => 'Problema & desafio',  'value' => $project['problem']    ?? null],
                        'objective'  => ['label' => 'Objetivo',            'value' => $project['objective']  ?? null],
                        'solution'   => ['label' => 'Solução',             'value' => $project['solution']   ?? null],
                        'process'    => ['label' => 'Processo',            'value' => $project['process']    ?? null],
                        'decisions'  => ['label' => 'Decisões relevantes', 'value' => $project['decisions']  ?? null],
                        'result'     => ['label' => 'Resultado',          'value' => $project['result']      ?? null],
                        'learnings'  => ['label' => 'Aprendizados',        'value' => $project['learnings']  ?? null],
                    ];
                ?>

                <?php $__currentLoopData = $narrative; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $block): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if(!empty($block['value'])): ?>
                        <section class="article-section">
                            <span class="article-section-label"><?php echo e($block['label']); ?></span>
                            <p><?php echo e($block['value']); ?></p>
                        </section>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                
                <?php if(!empty($project['video'])): ?>
                    <section class="article-section">
                        <span class="article-section-label">Demonstração</span>
                        <div class="article-gallery-item is-wide">
                            <video src="<?php echo e(asset($project['video'])); ?>" controls preload="metadata" class="w-full"></video>
                        </div>
                    </section>
                <?php endif; ?>

                
                <?php
                    $galleryItems = collect($project['gallery'] ?? [])
                        ->filter(fn ($item) => ($item['path'] ?? null) !== ($project['image'] ?? null))
                        ->values();
                ?>
                <?php if($galleryItems->isNotEmpty()): ?>
                    <section class="article-section">
                        <span class="article-section-label">Galeria</span>
                        <div class="article-gallery">
                            <?php $__currentLoopData = $galleryItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div>
                                    <div class="article-gallery-item <?php if(($item['type'] ?? null) === 'before_after'): ?> is-wide <?php endif; ?>">
                                        <img src="<?php echo e(asset($item['path'])); ?>" alt="<?php echo e($item['caption'] ?? $project['title']); ?>" loading="lazy">
                                    </div>
                                    <?php if(!empty($item['caption'])): ?>
                                        <p class="article-gallery-caption"><?php echo e($item['caption']); ?></p>
                                    <?php endif; ?>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </section>
                <?php endif; ?>

                <?php if(!empty($project['tags'])): ?>
                    <section class="article-section">
                        <span class="article-section-label">Stack &amp; tecnologias</span>
                        <div class="flex flex-wrap gap-2">
                            <?php $__currentLoopData = $project['tags']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <span class="article-tag"><?php echo e($tag); ?></span>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </section>
                <?php endif; ?>

            </div>
        </div>
    </article>
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