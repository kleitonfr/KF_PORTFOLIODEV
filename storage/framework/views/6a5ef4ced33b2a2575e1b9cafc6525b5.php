<section id="projetos" class="flow-projetos px-6 py-24 md:px-12">
    <div class="mx-auto max-w-6xl">
        <div class="reveal mb-4 text-center">
            <span class="eyebrow">Meus projetos</span>
            <h2 class="section-title mt-4">Cada card abre um estudo de caso completo</h2>
        </div>
        <p class="reveal mx-auto mb-12 max-w-2xl text-center text-sm leading-7 text-muted">
            Selecione um projeto para ver contexto, decisões de arquitetura, resultados e imagens em uma página dedicada.
        </p>

        <div class="reveal">
            <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('project-gallery', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-650048781-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
        </div>
    </div>
</section>
<?php /**PATH C:\xampp\htdocs\portfolio-kleiton\resources\views/sections/projetos.blade.php ENDPATH**/ ?>