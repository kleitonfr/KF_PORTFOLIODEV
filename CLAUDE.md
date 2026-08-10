# CLAUDE.md — Mapa do Projeto: Portfólio Kleiton Ferreira

> Guia de orientação para o Claude (e para qualquer dev) entender rapidamente a estrutura, as convenções e o propósito de cada parte deste projeto.
> Atualizado após a refatoração para a estrutura de 3 seções (Hero / Projetos / Outras Curiosidades).

## Visão Geral

- **Nome:** Portfólio Kleiton Ferreira
- **Stack:** Laravel 12 (PHP 8.2+) · Livewire 3.6 · Tailwind CSS 3 · Vite 6 · SQLite · GSAP
- **Tipo:** Site de portfólio pessoal (single page com 3 seções + páginas de artigo por projeto)
- **Banco de dados:** SQLite (`database/database.sqlite`), usado apenas para a tabela `projects`
- **Padrão arquitetural:** Repository + Service, com injeção de dependência via interface (`PortfolioRepositoryInterface`)
- **URL local:** `http://localhost/portfolio-kleiton/public`

## Regras de Design (vigentes desde a refatoração)

- **Mobile first**, 100% responsivo.
- **Sem ícones decorativos** na UI em geral (nada de SVG decorativo, emoji-como-ícone). Hierarquia por tipografia, espaçamento e cor.
  - **Exceção:** os ícones de skills técnicas ao redor do avatar no Hero (`.skill-orbit`) usam SVGs do [Devicon](https://devicon.dev) com as cores originais de cada marca. Essa é a única área da UI com ícones — decisão registrada em conversa com o Kleiton.
- **CTAs sempre em `sun` (`#FFBE00`)** — classe utilitária `.btn-cta`. Ações secundárias usam `.btn-outline`.
- **Header e footer com fundo preto.**
- **Gradiente de transição entre seções**, do topo ao rodapé: `branco → aqua → pink → violet → preto (footer)`.
  Implementado em `resources/css/app.css` via `.flow-hero`, `.flow-projetos`, `.flow-curiosidades`, `.flow-footer` — aplicadas como classe de fundo de cada `<section>`, formando um degradê contínuo ao rolar a página.

## Estrutura da Home (exatamente 3 seções, nesta ordem)

1. **Hero** (`sections/hero.blade.php`) — mesma estrutura/modelo de antes da refatoração, só com CTA amarelo e sem emoji.
2. **Projetos** (`sections/projetos.blade.php`) — grade de cards 100% clicáveis (`components/project-card.blade.php`, via `livewire/project-gallery.blade.php`), cada um com imagem grande, título e descrição breve. Clicar navega para `/projetos/{slug}` (`portfolio/project.blade.php`), não abre mais modal.
3. **Outras Curiosidades** (`sections/outras-curiosidades.blade.php`) — timeline **horizontal** (scroll-snap) da jornada profissional, usando os mesmos dados de `getJourneyItems()` do repositório (período, título, descrição, tags).

> Decisão registrada: as antigas seções de Hard Skills, Soft Skills, Sobre e Experiências (que já estavam com o include comentado / nunca renderizavam) e a seção de Contato avulsa foram removidas da home. O conteúdo de contato foi absorvido pelo **footer**, presente em todas as páginas.

## Fluxo de Dados

```
routes/web.php
   → PortfolioController (Http/Controllers)
       → PortfolioService (Services)
           → PortfolioRepositoryInterface (Contracts)
               → PortfolioRepository (Data)
                   ├── dados estáticos (hero, jornada, links sociais) — hardcoded em PHP
                   └── dados de projetos — vindos da tabela SQLite `projects`
   → view (resources/views/portfolio/*.blade.php)
```

`PortfolioController` tem um método privado `buildContact()` compartilhado por `index()` e `showProject()`, usado para alimentar o footer em qualquer página. **Correção feita na refatoração:** antes, `<x-layouts.app>` era chamado sem props em `portfolio/index.blade.php` e `portfolio/project.blade.php`, então `$socialLinks` e `$contact` nunca chegavam de fato ao footer (ficavam nos defaults vazios do `@props`). Agora ambos são passados explicitamente: `<x-layouts.app :socialLinks="$socialLinks" :contact="$contact">`.

---

## Estrutura de Diretórios e Descrição dos Arquivos

### Raiz

| Arquivo | Descrição |
|---|---|
| `.env` / `.env.example` | Variáveis de ambiente |
| `artisan`, `composer.json`, `package.json` | CLI e dependências (Laravel 12, Livewire 3.6, Vite 6, Tailwind 3, GSAP) |
| `tailwind.config.js` | Paleta de cores (`sun` corrigido para `#FFBE00`, batendo com o CSS e o README) |
| `README.md` | Instruções de instalação e mapa de seções, atualizado pós-refatoração |
| `_deprecated/` | Código antigo fora de uso — ver seção própria abaixo |

### `app/`

| Caminho | Descrição |
|---|---|
| `Contracts/PortfolioRepositoryInterface.php` | Contrato de acesso a dados do portfólio |
| `Data/PortfolioRepository.php` | Implementação concreta (hero/jornada/social hardcoded; projetos via SQLite) |
| `Http/Controllers/PortfolioController.php` | `index()`, `showProject()` e `buildContact()` (privado, compartilhado) |
| `Livewire/ProjectGallery.php` | Simplificado na refatoração: só monta e lista `$projects`, sem lógica de modal |
| `Providers/AppServiceProvider.php` | Bindings (`PortfolioRepositoryInterface` → `PortfolioRepository`, singleton do `PortfolioService`) |
| `Services/PortfolioService.php` | Agrega dados do repositório |

### `resources/views/`

| Caminho | Descrição |
|---|---|
| `components/layouts/app.blade.php` | **Único layout** (`<x-layouts.app>`). Recebe `title`, `description`, `socialLinks`, `contact`. Sem devicon/CDN de ícones. |
| `components/navbar.blade.php` | Fundo preto, sem SVG (botão mobile é só texto "Menu"/"Fechar"), links resolvem `#âncora` na home ou `route('home').'#âncora'` nas demais páginas |
| `components/footer.blade.php` | Fundo preto (`.flow-footer`), recebe `:socialLinks` e `:contact`, contém o CTA de e-mail/WhatsApp que antes era a seção `contato` |
| `components/project-card.blade.php` | Card 100% clicável (`<a>` como elemento raiz): imagem grande, título, descrição |
| `livewire/project-gallery.blade.php` | Grid responsivo (`sm:grid-cols-2 lg:grid-cols-3`) de `<x-project-card>` |
| `portfolio/index.blade.php` | Monta as 3 seções da home |
| `portfolio/project.blade.php` | Página de artigo: capa em destaque, depois seções (`Sobre o projeto`, `Stack & tecnologias`) |
| `sections/hero.blade.php` | Mesma estrutura de sempre; CTA amarelo, sem emoji |
| `sections/projetos.blade.php` | Intro da seção + `<livewire:project-gallery />` |
| `sections/outras-curiosidades.blade.php` | Timeline horizontal (novo) |

### `resources/css/app.css`

Reescrito na refatoração. Principais grupos de classes:
- `.flow-*` — gradiente de fundo entre seções
- `.btn-cta` / `.btn-outline` — botões
- `.curio-*` — timeline horizontal de Outras Curiosidades
- `.project-card-v2-*` — cards de projeto
- `.article-*` — página de artigo do projeto
- Mantidos: `.blob*`, `.hero-avatar*`, `.reveal`, `.eyebrow`, `.section-title` (usados pelo Hero e globalmente)
- `.skill-orbit`, `.skill-icon-wrap`, `.skill-icon-float`, `.skill-icon` — ícones de skills ao redor do avatar (substituem os antigos `.chip*`). Composição com **3 planos de profundidade** definidos à mão no array `$skills` de `hero.blade.php` (não são mais equidistantes/simétricos):
  - `fg` (primeiro plano, 3 ícones: Laravel/JS/PHP) — maior escala (`--icon-scale` ~1.3–1.46), raio maior (pode ultrapassar o anel do avatar), sombra mais forte (`.skill-icon--fg`), `z-index` mais alto, flutuação com mais amplitude (`--float-amp`).
  - `mid` (intermediário, 4 ícones: HTML/CSS/MySQL/Git) — escala ~1, sombra média (`.skill-icon--mid`).
  - `bg` (fundo, 5 ícones: REST API/SQLite/PostgreSQL/Figma/GitHub) — menor escala (~0.65–0.72), raio menor (mais perto do centro), sombra suave + leve `brightness(.97)` (`.skill-icon--bg`), opacidade reduzida (`--icon-opacity: .82`), `z-index` mais baixo, flutuação quase parada.
  - Cada ícone também tem `--tilt` (rotação estática leve, poucos graus) para reforçar a perspectiva sem prejudicar a leitura do logo.
  - Posicionamento: vetor unitário `--ux`/`--uy` (calculado a partir do `angle` de cada item) multiplicado por `--orbit-radius` (responsívo) e por `--r` (raio individual do item).
  - Animação de entrada `skillEmerge` (de dentro pra fora, escala 0 → `--icon-scale`, roda uma vez, `fg` emerge por último) + flutuação contínua `skillFloat` (só translateY, amplitude variável por plano) — sem órbita ao redor da foto e sem giro no próprio eixo. Tooltip via `data-tooltip` + `::before`/`::after`.
- Removidos (eram código morto ou ficaram sem uso): `.timeline*` antigo (vertical), `.skill-card`, `.soft-card`, `.exp-card*`, `.stat-mini*`, `.value-chip`, `.contact-btn*`, `.social-icon`

### `_deprecated/` — código movido, não excluído

O MCP de filesystem usado nesta sessão não tem ferramenta de exclusão de arquivos, então tudo que ficou fora de uso na refatoração foi **movido** para cá (preservando o caminho relativo original), em vez de apagado. Pode ser removido manualmente quando não precisar mais consultar:

- `resources/views/layouts/app.blade.php` — layout duplicado, nunca era usado de fato (`<x-layouts.app>` sempre resolvia para `components/layouts/app.blade.php`)
- `resources/views/sections/jornada.blade.php` — versão antiga (vertical) da timeline, com o markup real já comentado
- `resources/views/sections/hard-skills.blade.php`, `soft-skills.blade.php`, `experiencias.blade.php`, `sobre.blade.php`, `contato.blade.php` — já não eram incluídas em `portfolio/index.blade.php` antes da refatoração (código morto)
- `resources/views/components/skill-card.blade.php`, `journey-card.blade.php` — sem uso
- `app/View/Components/JourneyCard.php` — classe de apoio do componente acima
- `app/Jornada/*.php` (8 classes) — módulo de variações de layout de card (esquerda/direita/fullscreen/etc.) nunca instanciado em lugar nenhum do código

---

## Pontos de Atenção para Próximas Alterações

1. Os projetos seedados (`ProjectSeeder.php`) têm `image => null` — os cards e a capa do artigo caem no fallback tipográfico (`.project-card-v2-media-label` / `.article-cover-label`). Para usar fotos reais, defina o campo `image` com um caminho em `public/img/...`.
2. O link "Fale comigo" da navbar e os links internos de seção (`Projetos`, `Curiosidades`) resolvem a âncora certa conforme a rota atual (`request()->routeIs('home')`), já que agora existem duas páginas com o mesmo layout/navbar.
3. Se quiser reaproveitar algo de `_deprecated/`, adapte para as novas classes de CSS — as antigas (`.exp-card`, `.value-chip` etc.) foram removidas do `app.css`.

## Comandos Úteis

```bash
composer install
npm install
php artisan migrate
php artisan db:seed --class=ProjectSeeder
npm run dev
npm run build
php artisan serve
```
