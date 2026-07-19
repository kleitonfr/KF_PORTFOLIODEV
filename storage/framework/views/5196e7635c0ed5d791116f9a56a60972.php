<nav id="navbar" class="fixed left-0 right-0 top-0 z-50 px-6 py-4 md:px-12 bg-black">
    <div class="mx-auto flex max-w-6xl items-center justify-between">
        <a href="" class="font-display text-xl font-extrabold tracking-tight text-white">
            KF<span class="text-sun">.</span>
        </a>

        <ul class="hidden gap-8 text-sm font-semibold text-muted md:flex">
            <li><a href="#jornada" class="nav-link">Jornada</a></li>
            <li><a href="#skills" class="nav-link">Projetos</a></li>
        </ul>

        <a href="" class="rounded-full bg-sun text-black px-5 py-2.5 text-sm  font-semibold  transition-all duration-300 hover:bg-sun/80 hover:text-black md:inline-block">
            Fale comigo
        </a>

        <button id="menuBtn" class="rounded-xl p-2 md:hidden" aria-label="Abrir menu">
            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
        </button>
    </div>

    <div id="mobileMenu" class="mx-4 mt-4 hidden rounded-2xl border border-ink/5 bg-white p-6 shadow-xl md:hidden">
        <ul class="flex flex-col gap-5 font-semibold text-muted">
            <li><a href="#jornada" onclick="closeMobile()" class="block transition-colors hover:text-ink">Jornada</a></li>
            <li><a href="#skills" onclick="closeMobile()" class="block transition-colors hover:text-ink">Skills</a></li>
            <li><a href="#projetos" onclick="closeMobile()" class="block transition-colors hover:text-ink">Projetos</a></li>
            <li><a href="#contato" onclick="closeMobile()" class="block transition-colors hover:text-ink">Contato</a></li>
        </ul>
    </div>
</nav>
<?php /**PATH C:\xampp\htdocs\portfolio-kleiton\resources\views/components/navbar.blade.php ENDPATH**/ ?>