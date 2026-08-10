<?php
    $anchor = fn (string $id) => request()->routeIs('home') ? "#{$id}" : route('home') . "#{$id}";
?>

<header id="navbar" class="sticky top-0 z-50 border-b border-border bg-bg/80 backdrop-blur-xl">
    <nav class="mx-auto grid max-w-6xl grid-cols-[minmax(0,1fr)_auto] items-center gap-4 px-6 py-4 sm:flex sm:justify-between md:px-12">
        <a href="<?php echo e(route('home')); ?>" class="font-display text-lg font-extrabold tracking-tight text-ink">
            KF<span class="text-sun">.</span>
        </a>

        <div class="hidden items-center gap-8 md:flex">
            <a href="<?php echo e($anchor('projetos')); ?>" class="nav-link text-sm font-medium">Projetos</a>
            <a href="<?php echo e($anchor('depoimentos')); ?>" class="nav-link text-sm font-medium">Depoimentos</a>
            <a href="<?php echo e($anchor('curiosidades')); ?>" class="nav-link text-sm font-medium">Curiosidades</a>
        </div>

        <a href="<?php echo e($anchor('contato')); ?>" class="hidden shrink-0 rounded-full border border-border px-5 py-2 text-sm font-semibold text-ink transition-colors hover:border-sun hover:text-sun md:inline-flex" aria-label="Fale comigo">
            Fale comigo
        </a>

        <button id="menuBtn" class="rounded-full border border-border px-4 py-2 text-xs font-semibold uppercase tracking-[0.16em] text-ink md:hidden" aria-label="Abrir menu" aria-expanded="false">
            Menu
        </button>
    </nav>

    <div id="mobileMenu" class="mx-4 mb-4 hidden rounded-2xl border border-border bg-surface p-6 shadow-xl md:hidden">
        <ul class="flex flex-col gap-5 text-sm font-medium text-muted">
            <li><a href="<?php echo e($anchor('projetos')); ?>" onclick="closeMobile()" class="block transition-colors hover:text-sun">Projetos</a></li>
            <li><a href="<?php echo e($anchor('depoimentos')); ?>" onclick="closeMobile()" class="block transition-colors hover:text-sun">Depoimentos</a></li>
            <li><a href="<?php echo e($anchor('curiosidades')); ?>" onclick="closeMobile()" class="block transition-colors hover:text-sun">Curiosidades</a></li>
            <li><a href="<?php echo e($anchor('contato')); ?>" onclick="closeMobile()" class="block transition-colors hover:text-sun">Contato</a></li>
        </ul>
    </div>
</header>
<?php /**PATH D:\xampp\htdocs\Laravel\resources\views/components/navbar.blade.php ENDPATH**/ ?>