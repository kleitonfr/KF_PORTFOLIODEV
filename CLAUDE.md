# CLAUDE.md — Mapa do Projeto: Portfólio Kleiton Ferreira

> Guia de orientação para o Claude (e para qualquer dev) entender rapidamente a estrutura, as convenções e o propósito de cada parte deste projeto.

## Visão Geral

- **Nome:** Portfólio Kleiton Ferreira
- **Stack:** Laravel 12 (PHP 8.2+) · Livewire 3.6 · Tailwind CSS 3 · Vite 6 · SQLite · GSAP
- **Tipo:** Site de portfólio pessoal (single page + páginas de detalhe de projeto)
- **Banco de dados:** SQLite (`database/database.sqlite`), usado apenas para a tabela `projects`
- **Padrão arquitetural:** Repository + Service, com injeção de dependência via interface (`PortfolioRepositoryInterface`)
- **URL local:** `http://localhost/portfolio-kleiton/public`

## Fluxo de Dados (do request à view)

```
routes/web.php
   → PortfolioController (Http/Controllers)
       → PortfolioService (Services)
           → PortfolioRepositoryInterface (Contracts)
               → PortfolioRepository (Data)   [implementação concreta]
                   ├── dados estáticos (hero, jornada, links sociais) — hardcoded em PHP
                   └── dados de projetos — vindos da tabela SQLite `projects`
   → view (resources/views/portfolio/*.blade.php)
```

O binding `PortfolioRepositoryInterface → PortfolioRepository` e o singleton de `PortfolioService` são registrados em `app/Providers/AppServiceProvider.php`.

---

## Estrutura de Diretórios e Descrição dos Arquivos

### Raiz

| Arquivo | Descrição |
|---|---|
| `.env` / `.env.example` | Variáveis de ambiente (chave da app, conexão do banco, etc.) |
| `.htaccess` | Redirecionamento do Apache/XAMPP para `public/` |
| `artisan` | CLI do Laravel |
| `composer.json` / `composer.lock` | Dependências PHP (Laravel 12, Livewire 3.6, Pint, Faker) |
| `package.json` / `package-lock.json` | Dependências JS (Vite 6, Tailwind 3, GSAP, Axios) |
| `postcss.config.js` / `tailwind.config.js` / `vite.config.js` | Configuração de build de front-end |
| `README.md` | Instruções de instalação, paleta de cores e guia de edição de conteúdo (em PT-BR, bem detalhado) |

### `app/` — Código da aplicação

| Caminho | Descrição |
|---|---|
| `Contracts/PortfolioRepositoryInterface.php` | Interface que define o contrato de acesso a dados do portfólio (hero, jornada, projetos, links sociais) |
| `Data/PortfolioRepository.php` | Implementação concreta do repositório. Dados de hero/jornada/links são hardcoded aqui; projetos vêm do banco SQLite |
| `Http/Controllers/PortfolioController.php` | Único controller da aplicação. Duas ações: `index` (home) e `showProject` (página de detalhe via slug) |
| `Jornada/*.php` | Conjunto de classes relacionadas ao layout dos cards da linha do tempo ("Jornada"): `JourneyCardsLayout` (classe abstrata com o contrato de shape/imagens/animação GSAP), e variações de card (`LeftCard`, `RightCard`, `FullScreenCard`, `CompleteLeftCard`, `CompleteRightCard`, `CardFromBottom`, `CardWithImageAfterCardFullScreen`) — parecem representar diferentes estilos visuais de apresentação de cada item da timeline |
| `Livewire/ProjectGallery.php` | Componente Livewire que gerencia a galeria de projetos interativa (abrir/fechar modal de projeto selecionado via `selectedSlug`) |
| `Providers/AppServiceProvider.php` | Registra o binding da interface do repositório e o singleton do `PortfolioService` |
| `Services/PortfolioService.php` | Camada de serviço que agrega os dados do repositório em `getPageData()` e expõe `getProjectBySlug()` |
| `View/Components/JourneyCard.php` | Componente Blade (`<x-journey-card>`) que renderiza `components.journey-card` |

### `bootstrap/`

| Caminho | Descrição |
|---|---|
| `app.php` | Bootstrap da aplicação Laravel 12 (novo formato sem Kernel.php) |
| `providers.php` | Lista de service providers registrados |
| `cache/*.php` | Cache de pacotes/serviços gerado pelo Composer (não editar manualmente) |

### `config/`

| Caminho | Descrição |
|---|---|
| `database.php` | Conexão padrão `sqlite`, apontando para `database/database.sqlite` |
| `livewire.php` | Configuração do pacote Livewire |

### `database/`

| Caminho | Descrição |
|---|---|
| `database.sqlite` | Banco de dados SQLite usado em dev/produção simples |
| `migrations/2026_07_14_000001_create_projects_table.php` | Cria a tabela `projects` (slug, title, subtitle, excerpt, description, tags JSON, image, is_featured, position) |
| `seeders/ProjectSeeder.php` | Popula/atualiza (`updateOrInsert`) os projetos de exemplo: "Portal LGPD360" e "Mapeamento LGPD" |

### `public/` — Document root (aponta para cá no Apache)

| Caminho | Descrição |
|---|---|
| `index.php` | Entry point do Laravel |
| `.htaccess` | Rewrite rules do Laravel |
| `build/` | Assets compilados pelo Vite (JS/CSS com hash) + `manifest.json` |
| `css/style.css` | CSS legado/estático (fora do pipeline Vite) |
| `js/app.js` | JS legado/estático (fora do pipeline Vite) |
| `img/kleitonF.jpeg` | Foto de perfil usada no hero |
| `hot` | Arquivo criado pelo Vite quando `npm run dev` está ativo (hot reload) |

### `resources/` — Fonte de front-end

| Caminho | Descrição |
|---|---|
| `css/app.css` | CSS principal com diretivas Tailwind |
| `js/app.js` | Scroll reveal, navbar, menu mobile (JS de interação da página) |
| `js/bootstrap.js` | Bootstrap padrão do Laravel (Axios, etc.) |
| `views/layouts/app.blade.php` e `views/components/layouts/app.blade.php` | Layout base HTML (existe em dois lugares — possível duplicação a revisar) |
| `views/components/navbar.blade.php` | Barra de navegação |
| `views/components/footer.blade.php` | Rodapé |
| `views/components/project-card.blade.php` | Card de projeto (usado na listagem) |
| `views/components/skill-card.blade.php` | Card de habilidade (hard/soft skills) |
| `views/components/journey-card.blade.php` | Card da timeline/jornada profissional |
| `views/livewire/project-gallery.blade.php` | View do componente Livewire `ProjectGallery` |
| `views/portfolio/index.blade.php` | View principal da home (compõe todas as `sections/`) |
| `views/portfolio/project.blade.php` | View de detalhe de um projeto individual (`/projetos/{slug}`) |
| `views/sections/hero.blade.php` | Seção de abertura (nome, cargo, headline, foto) |
| `views/sections/jornada.blade.php` | Linha do tempo profissional |
| `views/sections/hard-skills.blade.php` | Habilidades técnicas |
| `views/sections/soft-skills.blade.php` | Habilidades comportamentais |
| `views/sections/experiencias.blade.php` | Experiências profissionais |
| `views/sections/projetos.blade.php` | Seção de projetos em destaque |
| `views/sections/sobre.blade.php` | Seção "sobre mim" |
| `views/sections/contato.blade.php` | Seção de contato (e-mail, WhatsApp, LinkedIn, GitHub) |

### `routes/`

| Caminho | Descrição |
|---|---|
| `web.php` | Duas rotas: `/` (home) e `/projetos/{slug}` (detalhe do projeto) |
| `console.php` | Comandos Artisan customizados (se houver) |

### `storage/`

| Caminho | Descrição |
|---|---|
| `framework/cache/`, `framework/sessions/`, `framework/views/` | Caches internos do Laravel (views compiladas, sessões) — gerados automaticamente, não versionar conteúdo |
| `logs/laravel.log` | Log de erros/eventos da aplicação |

---

## Convenções e Observações Importantes

1. **Conteúdo estático (hero, jornada, links sociais)** vive hardcoded em `App\Data\PortfolioRepository`, não no banco. Apenas **projetos** usam a tabela `projects` no SQLite.
2. **README.md menciona `app/Data/PortfolioData.php`** como arquivo central de conteúdo, mas o código atual usa `PortfolioRepository.php` — o README parece estar **desatualizado** em relação ao código-fonte (possível refatoração de Data → Repository/Contracts pattern que não foi refletida na documentação).
3. **Paleta de cores** (tema "Steven Universe"): sun `#FFBE00`, pink `#FF6B9D`, aqua `#00D4E8`, violet `#C084FC`, cream `#FFFBF2`, ink `#1A1A2E`, muted `#5B5B7A`.
4. **`app/Jornada/`** parece um módulo em construção/experimentação para diferentes variações visuais dos cards da timeline, usando GSAP para animação. Vale checar se todas as classes estão de fato em uso nas views.
5. Existe **duplicação de layout**: `resources/views/layouts/app.blade.php` e `resources/views/components/layouts/app.blade.php`. Vale confirmar qual é o realmente usado e remover o obsoleto.
6. Migração de projetos tem data `2026_07_14`, indicando que o banco de projetos foi adicionado recentemente (evolução de dados estáticos para dados dinâmicos).

## Comandos Úteis

```bash
composer install          # dependências PHP
npm install                # dependências JS
php artisan migrate        # roda migrations
php artisan db:seed --class=ProjectSeeder   # popula projetos de exemplo
npm run dev                 # Vite com hot reload
npm run build                # build de produção
php artisan serve            # servidor embutido (alternativa ao XAMPP)
```
