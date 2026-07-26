@props(['title' => null, 'description' => null, 'socialLinks' => [], 'contact' => []])

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="{{ $description ?? 'Portfólio de Kleiton Ferreira — Desenvolvedor Full Stack & Designer. Soluções digitais com impacto real para o setor público.' }}" />
    <meta name="keywords" content="Kleiton Ferreira, desenvolvedor, full stack, Laravel, PHP, LGPD, Caraguatatuba, portfólio, UX, design" />
    <meta property="og:title" content="{{ $title ?? 'Kleiton Ferreira — Dev Full Stack & Designer' }}" />
    <meta property="og:description" content="Transformando problemas reais em soluções digitais." />
    <meta name="theme-color" content="#FFBE00" />
    <title>{{ $title ?? 'Kleiton Ferreira — Dev Full Stack & Designer' }}</title>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;600;700;800&family=Plus+Jakarta+Sans:wght@400;500;600;700&family=JetBrains+Mono:wght@400;600&display=swap" rel="stylesheet" />

    @livewireStyles
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="overflow-x-hidden bg-white font-body text-ink">
    <x-navbar />

    {{ $slot }}

    <x-footer :socialLinks="$socialLinks ?? []" :contact="$contact ?? []" />

    @livewireScripts
</body>
</html>
