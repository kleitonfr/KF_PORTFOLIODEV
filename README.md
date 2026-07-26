# Portfólio Kleiton Ferreira
**Laravel 12 + Livewire 3 + Tailwind CSS 3 + Vite 6 + SQLite**

---

## Estrutura da Página Principal

A home (`/`) contém exatamente três seções, nesta ordem:

1. **Hero** — apresentação, CTA e destaques
2. **Projetos** — grade de cards clicáveis (imagem, título, descrição), cada um leva a uma página de artigo em `/projetos/{slug}`
3. **Outras Curiosidades** — timeline horizontal da jornada profissional (arraste para o lado)

O cabeçalho (fundo preto) e o rodapé (fundo preto, com os links de contato) aparecem em todas as páginas.

## Diretrizes de Design

- **Mobile first**, totalmente responsivo.
- **Sem ícones** em nenhum lugar da interface — tipografia, espaçamento e cor comunicam a hierarquia.
- **CTAs sempre em amarelo (`sun` `#FFBE00`)**.
- **Transição em gradiente** conduzindo o scroll da home até o rodapé:
  `branco → aqua → pink → violet → preto (footer)`
  Implementada em `resources/css/app.css` pelas classes `.flow-hero`, `.flow-projetos`, `.flow-curiosidades` e `.flow-footer`.

## Estrutura do Projeto

```
portfolio-kleiton/
├── app/
│   ├── Contracts/PortfolioRepositoryInterface.php
│   ├── Data/PortfolioRepository.php        ← conteúdo do hero, jornada e links sociais (hardcoded)
│   ├── Http/Controllers/PortfolioController.php
│   ├── Livewire/ProjectGallery.php
│   ├── Providers/AppServiceProvider.php
│   └── Services/PortfolioService.php
├── database/
│   ├── database.sqlite                     ← tabela `projects`
│   ├── migrations/
│   └── seeders/ProjectSeeder.php
├── resources/
│   ├── css/app.css
│   ├── js/app.js                           ← scroll reveal, navbar, menu mobile, GSAP
│   └── views/
│       ├── components/
│       │   ├── layouts/app.blade.php       ← layout único (<x-layouts.app>)
│       │   ├── navbar.blade.php
│       │   ├── footer.blade.php            ← contém o bloco de contato
│       │   └── project-card.blade.php
│       ├── livewire/project-gallery.blade.php
│       ├── portfolio/
│       │   ├── index.blade.php             ← monta as 3 seções da home
│       │   └── project.blade.php           ← página de artigo do projeto
│       └── sections/
│           ├── hero.blade.php
│           ├── projetos.blade.php
│           └── outras-curiosidades.blade.php
├── routes/web.php
└── _deprecated/                            ← código antigo, fora de uso, mantido apenas para referência
```

> `_deprecated/` reúne tudo que ficou de fora da refatoração (seções antigas de hard-skills, soft-skills, sobre, experiências e contato avulso, o módulo `app/Jornada/*` nunca utilizado, e o layout duplicado). Pode ser apagado manualmente quando não for mais necessário consultar.

---

## Instalação

### Pré-requisitos
- PHP 8.2+
- Composer
- Node.js 18+ e npm
- Apache/XAMPP com mod_rewrite ativo

### Passo a passo

```bash
cd C:\xampp\htdocs\portfolio-kleiton

composer install
cp .env.example .env
php artisan key:generate

npm install
npm run dev        # desenvolvimento (hot reload)
# ou
npm run build       # produção

php artisan migrate
php artisan db:seed --class=ProjectSeeder

# http://localhost/portfolio-kleiton/public
```

## Como atualizar o conteúdo

- **Hero, jornada e links sociais**: editados em `app/Data/PortfolioRepository.php`.
- **Projetos**: vêm da tabela `projects` (SQLite). Edite via `database/seeders/ProjectSeeder.php` + `php artisan db:seed --class=ProjectSeeder`, ou diretamente no banco.
- Cada projeto tem um campo `image` (opcional). Se vazio, o card e a capa da página do artigo mostram um bloco tipográfico com o título no lugar da imagem.

## Paleta de Cores (Steven Universe)

| Token    | Hex       | Uso                                  |
|----------|-----------|---------------------------------------|
| `sun`    | `#FFBE00` | CTAs, destaques                        |
| `pink`   | `#FF6B9D` | Transição de gradiente entre seções    |
| `aqua`   | `#00D4E8` | Transição de gradiente entre seções    |
| `violet` | `#C084FC` | Transição de gradiente entre seções    |
| `white`  | `#FFFFFF` | Início do gradiente (Hero)             |
| `black`  | `#000000` | Header e footer                        |
| `ink`    | `#1A1A2E` | Texto/contraste                        |
| `muted`  | `#5B5B7A` | Texto secundário                       |

## Desenvolvido por

**Kleiton Ferreira** — Desenvolvedor Full Stack & Designer
kleytonferreira9@gmail.com
[linkedin.com/in/kleiton-ferreira-a956b0155](https://www.linkedin.com/in/kleiton-ferreira-a956b0155/)
