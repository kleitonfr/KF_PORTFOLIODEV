# Portfólio Kleiton Ferreira
**Laravel 12 + Tailwind CSS 3 + Vite 6**

---

## Estrutura do Projeto

```
portfolio-kleiton/
├── app/
│   ├── Data/
│   │   └── PortfolioData.php       ← TODO o conteúdo do portfólio (edite aqui)
│   └── Http/
│       └── Controllers/
│           └── PortfolioController.php
├── bootstrap/
│   └── app.php                     ← Configuração Laravel 12
├── resources/
│   ├── css/
│   │   └── app.css                 ← Estilos + Tailwind (@layer components)
│   ├── js/
│   │   ├── app.js                  ← Scroll reveal, navbar, mobile menu
│   │   └── bootstrap.js
│   └── views/
│       ├── layouts/
│       │   └── app.blade.php       ← Layout principal
│       ├── components/             ← Blade components reutilizáveis
│       │   ├── navbar.blade.php
│       │   ├── footer.blade.php
│       │   ├── project-card.blade.php
│       │   ├── skill-card.blade.php
│       │   └── timeline-item.blade.php
│       ├── sections/               ← Seções da página
│       │   ├── hero.blade.php
│       │   ├── jornada.blade.php
│       │   ├── hard-skills.blade.php
│       │   ├── soft-skills.blade.php
│       │   ├── experiencias.blade.php
│       │   ├── projetos.blade.php
│       │   ├── sobre.blade.php
│       │   └── contato.blade.php
│       └── portfolio/
│           └── index.blade.php     ← View principal
├── routes/
│   └── web.php
├── public/
│   ├── index.php                   ← Entry point Laravel
│   ├── img/                        ← Coloque suas fotos aqui
│   │   ├── kleiton.jpg             (foto de perfil — opcional)
│   │   ├── premio-trofeu.jpg       (foto do troféu InovaCidade)
│   │   └── premio-equipe.jpg       (foto da equipe com troféu)
│   ├── css/                        ← Gerado pelo Vite (após build)
│   └── js/                         ← Gerado pelo Vite (após build)
├── .env
├── composer.json
├── package.json
├── vite.config.js
├── tailwind.config.js
└── postcss.config.js
```

---

## Instalação

### Pré-requisitos
- PHP 8.2+
- Composer
- Node.js 18+ e npm
- Apache/XAMPP com mod_rewrite ativo

### Passo a passo

```bash
# 1. Entre na pasta do projeto
cd C:\xampp\htdocs\portfolio-kleiton

# 2. Instale dependências PHP
composer install

# 3. Configure o .env
cp .env.example .env
php artisan key:generate

# 4. Instale dependências Node
npm install

# 5a. Modo desenvolvimento (Vite dev server + hot reload)
npm run dev

# 5b. OU build para produção (gera assets compilados em public/)
npm run build

# 6. Acesse no navegador
# http://localhost/portfolio-kleiton/public
```

---

## Como adicionar sua foto

1. Copie sua foto para `public/img/kleiton.jpg`
2. No arquivo `resources/views/sections/hero.blade.php`, encontre o comentário:
   ```blade
   {{-- <img src="{{ asset('img/kleiton.jpg') }}" ... > --}}
   ```
3. Descomente a linha da `<img>` e comente/apague o bloco `<svg>`

---

## Como adicionar as fotos da premiação

Copie as imagens para:
- `public/img/premio-trofeu.jpg` — foto do troféu InovaCidade
- `public/img/premio-equipe.jpg` — foto da equipe STII com troféu

O sistema detecta automaticamente se os arquivos existem e os exibe.
Enquanto não existirem, mostra placeholders informativos.

---

## Como atualizar o conteúdo

Todo o conteúdo está centralizado em:
```
app/Data/PortfolioData.php
```

Edite os arrays de retorno de cada método:
- `stats()` — números do hero
- `timeline()` — itens da jornada
- `hardSkills()` — habilidades técnicas
- `softSkills()` — habilidades comportamentais
- `projects()` — cards de projetos
- `values()` — chips de valores
- `contact()` — links de contato

**Não é necessário tocar nas views** para atualizar textos.

---

## Paleta de Cores (Steven Universe)

| Token    | Hex       | Uso                        |
|----------|-----------|----------------------------|
| `sun`    | `#FFBE00` | Amarelo Solar — destaques  |
| `pink`   | `#FF6B9D` | Rosa Hibisco — acentos     |
| `aqua`   | `#00D4E8` | Aqua Cristal — tecnologia  |
| `violet` | `#C084FC` | Lavanda Mágica — stacks    |
| `cream`  | `#FFFBF2` | Branco Quente — fundo      |
| `ink`    | `#1A1A2E` | Tinta Noite — texto/dark   |
| `muted`  | `#5B5B7A` | Texto secundário           |

---

## Desenvolvido por

**Kleiton Ferreira** — Desenvolvedor Full Stack & Designer  
kleytonferreira9@gmail.com  
[linkedin.com/in/kleiton-ferreira-a956b0155](https://www.linkedin.com/in/kleiton-ferreira-a956b0155/)
