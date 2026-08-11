<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        $projects = [

            // ─────────────────────────────────────────────────────────────
            // 1. Portal LGPD360 — projeto premiado, destaque principal
            // ─────────────────────────────────────────────────────────────
            [
                'slug' => 'portal-lgpd360',
                'title' => 'Portal LGPD360',
                'subtitle' => 'Portal de Direitos Digitais',
                'role' => 'Desenvolvedor Full Stack',
                'year' => '2026',
                'status' => 'Entregue e em produção',
                'client' => 'Prefeitura Municipal de Caraguatatuba · Secretaria de Tecnologia da Informação e Inovação',
                'excerpt' => 'Portal institucional que transforma uma obrigação legal (LGPD) em entrega pública de valor: consulta de dados pessoais, painel de adequação por secretaria e canal direto com o Encarregado de Dados — com autenticação gov.br e acessibilidade como requisito, não como adição.',
                'description' => 'O LGPD360 é o portal público da Prefeitura de Caraguatatuba dedicado à adequação municipal à Lei Geral de Proteção de Dados. Diferente de sistemas internos de gestão, ele foi pensado para o cidadão: permite consultar se os próprios dados constam nas bases municipais, acompanhar o progresso de adequação das 22 secretarias e falar diretamente com o DPO — tudo em uma experiência acessível e responsiva.',
                'context' => 'A Prefeitura precisava não apenas cumprir a LGPD internamente, mas também comunicar esse processo de forma transparente à população. A demanda era por um canal público, seguro e acessível que desse ao cidadão controle real sobre seus dados pessoais.',
                'problem' => 'Sem um portal centralizado, o cidadão não tinha como saber quais sistemas municipais armazenavam seus dados, nem como acompanhar a evolução da adequação à LGPD nas diferentes secretarias. O contato com o Encarregado de Dados também não possuía um canal formal e seguro.',
                'objective' => 'Construir um portal que unisse consulta de dados pessoais, transparência do processo de adequação e um canal oficial de contato com o DPO — com autenticação segura via gov.br e acessibilidade real (não decorativa).',
                'solution' => 'Implementei consulta simultânea a quatro sistemas municipais (SESAU, Central 156, EMBRAS e RH Municipal), com mascaramento parcial de CPF na tela. Um painel de adequação exibe em tempo real a contagem de registros ROPA/RIPD mapeados e o progresso por secretaria. O formulário de contato com o DPO possui validação, sanitização e envio transacional com rollback automático em banco. A autenticação do cidadão usa OAuth 2.0 com PKCE (RFC 7636) integrado ao SSO gov.br.',
                'process' => 'O sistema segue o padrão MVC com camada de Services, isolando regras de negócio dos controllers. Para viabilizar a consulta multi-fonte, o projeto opera com três conexões de banco simultâneas: MySQL principal (formulários, sessões, cache), MySQL externo (ROPA/RIPD das 22 secretarias) e PostgreSQL (data warehouse municipal com SESAU, Central 156 e EMBRAS).',
                'decisions' => 'Tratei acessibilidade como requisito desde o início do desenvolvimento, não como camada adicional: integração oficial do VLibras, alternância de alto contraste e controle de tamanho de fonte com persistência em localStorage, atributos ARIA em todos os elementos interativos e menu responsivo construído em CSS puro (sem JavaScript). O fluxo de autenticação gov.br foi implementado seguindo à risca o RFC 7636 (PKCE), com geração de code_verifier, code_challenge via SHA-256 e validação de state para proteção contra CSRF.',
                'result' => 'Portal em produção real, atendendo às 22 secretarias municipais, com consulta de dados funcionando sobre três bancos distintos e autenticação gov.br operacional. O projeto foi reconhecido com o Prêmio InovaCidade · Iniciativas 2026.',
                'learnings' => 'Implementação real de OAuth 2.0 + PKCE em produção, integração com data warehouse PostgreSQL de múltiplos sistemas municipais, transações com rollback automático em operações críticas, separação em camada de Services e mascaramento de dados pessoais na própria camada de view — nunca expondo CPF completo ao frontend.',
                'tags' => json_encode(['PHP 8.2', 'Laravel 12', 'MySQL', 'PostgreSQL', 'Tailwind CSS 4', 'Vite 7', 'OAuth 2.0 + PKCE']),
                'image' => 'img/lgpd360/image (1).png',
                'gallery' => json_encode([
                    ['path' => 'img/lgpd360/image (1).png', 'type' => 'cover', 'caption' => 'Página inicial do portal'],
                    ['path' => 'img/lgpd360/image (2).png', 'type' => 'screenshot', 'caption' => 'Consulta de dados pessoais'],
                    ['path' => 'img/lgpd360/image (3).png', 'type' => 'screenshot', 'caption' => 'Página educativa sobre a LGPD'],
                    ['path' => 'img/lgpd360/image (4).png', 'type' => 'screenshot', 'caption' => 'Canal de comunicação com o DPO'],
                    ['path' => 'img/lgpd360/1780945314933.jpg', 'type' => 'detail', 'caption' => 'Apresentação do projeto'],
                    ['path' => 'img/lgpd360/1782323272578.jpg', 'type' => 'detail', 'caption' => 'Prêmio InovaCidade · Iniciativas 2026'],
                ]),
                'video' => null,
                'external_url' => 'https://lgpd360.caraguatatuba.sp.gov.br/',
                'linkedin_url' => 'https://www.linkedin.com/posts/kleiton-ferreira_desenvolvimentodesoftware-lgpd-govtech-ugcPost-7475605638614601729-Otqh/',
                'repo_url' => null,
                'is_featured' => true,
                'is_award' => true,
                'award_label' => 'Prêmio InovaCidade · Iniciativas 2026',
                'position' => 1,
            ],

            // ─────────────────────────────────────────────────────────────
            // 2. Sistema de Mapeamento LGPD — Gestão de ROPA/RIPD
            // ─────────────────────────────────────────────────────────────
            [
                'slug' => 'mapeamento-lgpd',
                'title' => 'Sistema de Mapeamento LGPD',
                'subtitle' => 'Gestão de ROPA e RIPD',
                'role' => 'Desenvolvedor Full Stack',
                'year' => '2026',
                'status' => 'Em produção',
                'client' => 'Prefeitura Municipal de Caraguatatuba · Secretaria de Tecnologia da Informação e Inovação',
                'excerpt' => 'Sistema interno que automatiza o mapeamento, gestão e auditoria de todos os processos de tratamento de dados pessoais das secretarias municipais — da modelagem do banco ao deploy em produção.',
                'description' => 'Sistema web interno para auxiliar a Prefeitura no cumprimento das obrigações da LGPD, centralizando o mapeamento de processos de tratamento de dados (ROPA) e os relatórios de impacto (RIPD) em conformidade com a lei federal nº 13.709/2018.',
                'context' => 'Antes do sistema, o controle dos registros de tratamento de dados pessoais das secretarias dependia de processos manuais — sem rastreabilidade automática de prazos, pendências ou dados sensíveis sem avaliação de impacto.',
                'problem' => 'Não havia forma automatizada de detectar registros com dados sensíveis sem RIPD associado, nem de monitorar registros vencidos (mais de um ano sem revalidação). Todo o acompanhamento de pendências era manual.',
                'objective' => 'Centralizar o ciclo de vida completo dos registros ROPA e RIPD, com automação de pendências, controle de acesso por perfil e auditoria completa de todas as ações do sistema.',
                'solution' => 'Desenvolvi um sistema com três níveis de usuário (comum, administrador e DPO), ciclo de vida completo dos registros ROPA (criação, validação, invalidação com justificativa, nova versão com preservação de histórico) e um fluxo dedicado de RIPD para o DPO, incluindo matriz de riscos dinâmica com cálculo de probabilidade × impacto.',
                'process' => 'Arquitetura MVC com camada de Services, rodando sobre Laravel 12. Um CronJob diário verifica automaticamente registros com mais de um ano sem revalidação e cria pendências sem intervenção humana — o mesmo acontece na criação/atualização de registros, que dispara verificação automática de dados sensíveis sem RIPD.',
                'decisions' => 'Implementei um sistema de pendências encadeadas: resolver uma pendência de "atualização" resolve automaticamente a de "reavaliação" do mesmo registro, já que um processo atualizado já foi, por definição, reavaliado. Todas as entidades críticas usam soft delete — nenhum registro é excluído fisicamente, preservando histórico completo para auditoria, conforme exige a própria LGPD.',
                'result' => 'Sistema real em uso pelas secretarias municipais, com 4 controllers, 7 services, 11 models, 22 migrations e mais de 20 rotas. Auditoria completa com 5 níveis de severidade de log, capturando usuário, IP, timestamp e contexto de cada ação crítica.',
                'learnings' => 'Modelagem de um ciclo de vida complexo com múltiplos estados e transições entre entidades, CronJob com lógica de negócio real para verificação de conformidade, sistema de pendências com resolução em cascata, auditoria de nível enterprise com contexto em JSON e transações de banco com rollback automático em todas as operações críticas.',
                'tags' => json_encode(['PHP 8.2', 'Laravel 12', 'MySQL', 'Tailwind CSS', 'Vite']),
                'image' => 'img/mapeamentoLGPD/image1.png',
                'gallery' => json_encode([
                    ['path' => 'img/mapeamentoLGPD/image1.png', 'type' => 'cover', 'caption' => 'Visão geral do sistema'],
                    ['path' => 'img/mapeamentoLGPD/image2.png', 'type' => 'screenshot', 'caption' => 'Gestão de registros ROPA'],
                    ['path' => 'img/mapeamentoLGPD/image3.png', 'type' => 'screenshot', 'caption' => 'Relatório de Impacto (RIPD)'],
                    ['path' => 'img/mapeamentoLGPD/image4.png', 'type' => 'screenshot', 'caption' => 'Painel de cadastro'],
                    ['path' => 'img/mapeamentoLGPD/image5.png', 'type' => 'screenshot', 'caption' => 'Sistema de pendências'],
                    ['path' => 'img/mapeamentoLGPD/image6.png', 'type' => 'detail', 'caption' => 'Detalhe de interface'],
                ]),
                'video' => 'img/mapeamentoLGPD/WhatsApp Video 2026-08-11 at 19.20.39.mp4',
                'external_url' => null,
                'linkedin_url' => null,
                'repo_url' => null,
                'is_featured' => true,
                'is_award' => false,
                'award_label' => null,
                'position' => 4,
            ],

            // ─────────────────────────────────────────────────────────────
            // 3. Estratégia Digital — Redesign da Experiência e Arquitetura Visual
            // ─────────────────────────────────────────────────────────────
            [
                'slug' => 'estrategia-digital',
                'title' => 'Estratégia Digital',
                'subtitle' => 'Redesign da Experiência e Arquitetura Visual',
                'role' => 'Designer, Desenvolvedor Front-End e Arquiteto de Informação',
                'year' => '2025 — 2026',
                'status' => 'Entregue e em produção',
                'client' => 'Prefeitura Municipal de Caraguatatuba · Secretaria de Tecnologia da Informação e Inovação',
                'excerpt' => 'Redesign completo do portal que comunica a transformação digital do município — 6 eixos estratégicos, 18 objetivos e 81 iniciativas transformados de listas de texto em uma experiência visual guiada pela metáfora do cérebro neural.',
                'description' => 'O portal Estratégia Digital é o canal oficial da Secretaria de Tecnologia para apresentar a transformação digital de Caraguatatuba. Assumi a responsabilidade de repensar, redesenhar e reimplementar toda a experiência — não apenas a interface, mas a forma como um volume grande de informação estratégica é comunicado ao cidadão.',
                'context' => 'O portal concentra 6 eixos estratégicos, 18 objetivos de transformação e 81 iniciativas — um volume expressivo de conteúdo que precisava ser comunicado com clareza e impacto, sem depender de leitura densa.',
                'problem' => 'A versão anterior apresentava excesso de texto na área hero, os eixos estratégicos apareciam duplicados (no menu e em uma seção separada da home), a estrutura não favorecia leitura rápida e a carga cognitiva para entender o conteúdo era alta.',
                'objective' => 'Reduzir a dependência de grandes blocos de texto substituindo leitura por compreensão visual imediata, criar diferenciação clara entre os eixos estratégicos e construir uma identidade visual própria e memorável para o portal.',
                'solution' => 'Criei um universo visual baseado na metáfora do cérebro humano conectado: os eixos estratégicos viraram constelações visuais interativas, com nós e conexões animadas representando a estrutura interna de cada eixo. Os eixos saíram do dropdown do menu e passaram a ser a primeira coisa que o usuário vê na home, como cards de constelação com contagem de iniciativas e barra de progresso.',
                'process' => 'Além da home, redesenhei o Roadmap como uma experiência de imersão — hero cinematográfico com fundo de galáxia seguido de uma linha do tempo vertical interativa (substituindo as antigas listas), com cards de status (Explorando, Em Execução, Concluído). Implementei também, do zero, um sistema de artigos para a Secretaria publicar conteúdo editorial próprio.',
                'decisions' => 'Reorganizei toda a arquitetura CSS do projeto, que antes era monolítica: separei os estilos por responsabilidade (componentes, layout, tipografia, variáveis), extraí todas as animações para um `keyframes.css` dedicado e todas as media queries para um `responsive.css` independente, seguindo abordagem mobile-first real — não apenas adaptação da versão desktop. Implementei também uma camada de SEO técnico com JSON-LD (Schema.org), Open Graph e Twitter Cards.',
                'result' => 'Portal em produção com navegação sem dropdowns, home com 6 constelações animadas, roadmap com timeline vertical imersiva, sistema de artigos funcional e acessibilidade completa (VLibras, alto contraste, controle de fonte, semântica HTML e ARIA).',
                'learnings' => 'Este projeto foi, acima de tudo, um exercício de transformar complexidade em clareza — mostrar que um redesign de portal público pode ir muito além da estética, criando um universo visual capaz de tornar conceitos estratégicos complexos em algo intuitivo, memorável e humano.',
                'tags' => json_encode(['HTML', 'CSS (Mobile First)', 'JavaScript', 'PHP/Laravel', 'JSON-LD']),
                'image' => 'img/estrategiaDigital/recenteCapa01.png',
                'gallery' => json_encode([
                    ['path' => 'img/estrategiaDigital/recenteCapa01.png', 'type' => 'cover', 'caption' => 'Home — versão atual, com constelações dos eixos estratégicos'],
                    ['path' => 'img/estrategiaDigital/recente02.png', 'type' => 'screenshot', 'caption' => 'Constelação de eixo estratégico'],
                    ['path' => 'img/estrategiaDigital/recente03.png', 'type' => 'screenshot', 'caption' => 'Demonstração dos eixos estratégicos'],
                    ['path' => 'img/estrategiaDigital/recente04.png', 'type' => 'screenshot', 'caption' => 'Início do roteiro digital'],
                    ['path' => 'img/estrategiaDigital/recente05.png', 'type' => 'screenshot', 'caption' => 'Roadmap — timeline vertical imersiva'],
                    ['path' => 'img/estrategiaDigital/imageComoEraAntes (1).png', 'type' => 'before_after', 'caption' => 'Home — versão anterior ao redesign'],
                    ['path' => 'img/estrategiaDigital/imageComoEraAntes (2).png', 'type' => 'before_after', 'caption' => 'Seção de eixos — versão anterior'],
                    ['path' => 'img/estrategiaDigital/imageComoEraAntes (3).png', 'type' => 'before_after', 'caption' => 'Roadmap — versão anterior'],
                ]),
                'video' => null,
                'external_url' => 'https://estrategiadigital.caraguatatuba.sp.gov.br/',
                'linkedin_url' => 'https://www.linkedin.com/posts/kleiton-ferreira_uxdesign-uidesign-designestrataezgico-ugcPost-7489089695348539392-VE3z/',
                'repo_url' => null,
                'is_featured' => true,
                'is_award' => false,
                'award_label' => null,
                'position' => 2,
            ],

            // ─────────────────────────────────────────────────────────────
            // 4. Nest Florestal — API de fiscalização ambiental (NestJS)
            // ─────────────────────────────────────────────────────────────
            [
                'slug' => 'nest-florestal',
                'title' => 'Nest Florestal',
                'subtitle' => 'API de fiscalização e monitoramento ambiental',
                'role' => 'Desenvolvedor Backend',
                'year' => '2025',
                'status' => 'Privado',
                'client' => null,
                'excerpt' => 'API REST para gestão de fiscalização ambiental e florestal, construída com NestJS — autenticação e autorização em camadas com JWT e Guards, persistência via Prisma e modelagem de fiscais, infrações e relatórios.',
                'description' => 'O Nest Florestal é uma API backend para gerenciamento de fiscalização e ocorrências ambientais/florestais: permite que fiscais autenticados registrem relatórios de infrações, associando cada ocorrência a um responsável, um tipo de infração, local, data e um texto descritivo, com enquadramento administrativo e penal.',
                'context' => 'Fiscalização ambiental depende do registro estruturado de ocorrências — associar cada infração a um fiscal responsável, um tipo de infração, local, data e um relatório descritivo — para viabilizar acompanhamento, auditoria e enquadramento administrativo ou penal.',
                'problem' => 'Processos de registro de ocorrências ambientais tendem a ser manuais e descentralizados, sem uma base única que relacione fiscais, infrações e relatórios de forma consistente e consultável.',
                'objective' => 'Construir uma API REST que centralize a fiscalização ambiental: cadastro de infrações, emissão de relatórios por fiscais autenticados e um modelo de dados auditável para as ocorrências.',
                'solution' => 'Modelei o domínio em três entidades centrais — fiscal, infração e relatório —, com o relatório mediando a relação entre fiscal e infração (um fiscal emite vários relatórios; uma infração pode estar associada a vários relatórios). Cada infração carrega categoria, tags, procedimentos administrativos/operacionais e enquadramento penal e administrativo; cada relatório registra local, data, observações e o texto da ocorrência.',
                'process' => 'A API foi construída em NestJS com arquitetura modular — autenticação, usuários e acesso a dados isolados em módulos próprios em vez de um controller único. A autenticação usa JWT com Passport (estratégias local e JWT) e senhas com bcrypt; um `JwtAuthGuard` está configurado como guard global, protegendo toda rota por padrão. Guards e decorators dedicados (`admin.guard`, `self.guard`, `is-admin`, `is-self`) tratam os diferentes níveis de autorização, com um middleware específico para validação de CPF.',
                'decisions' => 'Optei pelo Prisma como ORM sobre MySQL, com schema versionado por migration e um seed para dados iniciais, em vez de depender de criação manual do banco. Centralizar autorização em guards e decorators — ao invés de checagens condicionais espalhadas pelos controllers — manteve essa regra em um único lugar, testável isoladamente.',
                'result' => 'API funcional com módulos de autenticação, usuários e persistência via Prisma, cobertura de testes unitários e end-to-end (Jest e Supertest) para os componentes de autenticação, e scripts próprios para lint, build e análise de cobertura.',
                'learnings' => 'Aprofundei na prática a separação entre autenticação e autorização com guards e decorators do NestJS, e as vantagens de proteger rotas por padrão — com exceções explícitas — em vez de proteger caso a caso.',
                'tags' => json_encode(['NestJS', 'TypeScript', 'Prisma', 'MySQL', 'JWT']),
                'image' => 'img/nestFlorestal/app1.jpeg',
                'gallery' => json_encode([
                    ['path' => 'img/nestFlorestal/app1.jpeg', 'type' => 'cover', 'caption' => null],
                    ['path' => 'img/nestFlorestal/app2.jpeg', 'type' => 'screenshot', 'caption' => null],
                    ['path' => 'img/nestFlorestal/app3.jpeg', 'type' => 'screenshot', 'caption' => null],
                    ['path' => 'img/nestFlorestal/app4].jpeg', 'type' => 'screenshot', 'caption' => null],
                    ['path' => 'img/nestFlorestal/app5.jpeg', 'type' => 'screenshot', 'caption' => null],
                    ['path' => 'img/nestFlorestal/app6.jpeg', 'type' => 'screenshot', 'caption' => null],
                    ['path' => 'img/nestFlorestal/WhatsApp Image 2025-12-03 at 10.30.38.jpeg', 'type' => 'detail', 'caption' => null],
                ]),
                'video' => null,
                'external_url' => null,
                'linkedin_url' => null,
                'repo_url' => null,
                'is_featured' => false,
                'is_award' => false,
                'award_label' => null,
                'position' => 5,
            ],

            // ─────────────────────────────────────────────────────────────
            // 5. Conversor RET → Excel (DJO190)
            // ─────────────────────────────────────────────────────────────
            [
                'slug' => 'conversor-ret-excel',
                'title' => 'Conversor RET → Excel',
                'subtitle' => 'Padrão DJO190 · Banco do Brasil',
                'role' => 'Desenvolvedor Backend',
                'year' => null,
                'status' => 'Concluído',
                'client' => null,
                'excerpt' => 'Conversor standalone em PHP puro que lê arquivos .RET do padrão DJO190 (depósitos judiciais tributários do Banco do Brasil) e gera uma planilha Excel formatada para download.',
                'description' => 'Ferramenta que recebe, via upload, arquivos de retorno no padrão DJO190 do Banco do Brasil — usados para depósitos judiciais tributários — e converte o conteúdo em uma planilha .xlsx formatada e pronta para análise, sem depender de nenhum framework.',
                'context' => 'O DJO190 é um formato de arquivo de largura fixa (450 caracteres por linha, padrão CNAB) com múltiplos layouts lógicos identificados por letras (A a L), sendo as ímpares para Governo e as pares para Tribunais — todos usando a mesma estrutura física de registro.',
                'problem' => 'Interpretar manualmente um arquivo de largura fixa com vários layouts diferentes na mesma estrutura, sem gerar planilhas legíveis, era um processo lento e sujeito a erro humano.',
                'objective' => 'Construir um parser único capaz de identificar automaticamente o tipo de layout do arquivo (pela posição 36–37 do Header 0) e converter todos os registros relevantes em uma planilha Excel formatada.',
                'solution' => 'Implementei a leitura linha a linha do arquivo com `fgets()`, extração de campos por posição fixa com `substr()`, mesclagem dos registros A (dados do processo) e B (dados financeiros) e geração da planilha final com PhpSpreadsheet — incluindo estilos, zebra striping, formatação monetária e largura automática de colunas.',
                'process' => 'Ao longo do desenvolvimento, resolvi uma série de problemas típicos de parsing de arquivos legados: o registro B sobrescrevendo os dados já lidos do registro A, registros de resumo (C e 9) que nunca eram alcançados por um segundo loop de leitura, caminhos relativos que quebravam dependendo do diretório de execução do Apache, e acentos corrompidos por conflito de encoding entre ISO-8859-1 (origem do RET) e UTF-8 (esperado pelo Excel).',
                'decisions' => 'Optei por manter o projeto em PHP puro, sem framework, por ser uma ferramenta standalone de conversão. Fixei a versão do PHP no Composer (`platform.php 8.2.12`) para contornar uma exigência de PHP 8.3 introduzida pela versão mais recente do PhpSpreadsheet, garantindo compatibilidade com o ambiente de produção.',
                'result' => 'Um único parser resolve todos os layouts do DJO190 (saldo de depósitos, maiores depósitos, depósitos acolhidos e resumo tributário), entregando a planilha final pronta para download diretamente pelo navegador.',
                'learnings' => 'Trabalhar com arquivos de largura fixa exige rigor absoluto na leitura de posições; sinalizações de erro como "chave indefinida" quase sempre indicam que um registro está sobrescrevendo o anterior em vez de mescá-lo. Também aprendi na prática os limites de compatibilidade entre versões do PhpSpreadsheet e do PHP.',
                'tags' => json_encode(['PHP', 'PhpSpreadsheet', 'CNAB / DJO190']),
                'image' => 'img/conversorRat/image (1).png',
                'gallery' => json_encode([
                    ['path' => 'img/conversorRat/image (1).png', 'type' => 'cover', 'caption' => 'Tela de upload e conversão'],
                ]),
                'video' => null,
                'external_url' => null,
                'linkedin_url' => null,
                'repo_url' => null,
                'is_featured' => false,
                'is_award' => false,
                'award_label' => null,
                'position' => 6,
            ],

            // ─────────────────────────────────────────────────────────────
            // 6. Vaga Fácil — Central de Vagas Escolares (Hackathon IFSP 2026)
            // ─────────────────────────────────────────────────────────────
            [
                'slug' => 'vaga-facil',
                'title' => 'Vaga Fácil',
                'subtitle' => 'Central de Vagas Escolares',
                'role' => 'Desenvolvedor Full Stack',
                'year' => '2026',
                'status' => 'Protótipo — Hackathon IFSP 2026',
                'client' => null,
                'excerpt' => 'Plataforma desenvolvida em equipe durante o Hackathon IFSP 2026 para facilitar o acesso a vagas da rede municipal de ensino de Caraguatatuba: consulta pública por região, mapa interativo e pré-inscrição, com um painel administrativo para gestão de vagas, alunos e listas de espera.',
                'description' => 'O Vaga Fácil é uma central de vagas escolares construída durante o Hackathon IFSP 2026. Permite que pais e responsáveis consultem escolas e vagas disponíveis por região, bairro e série, visualizem as unidades em um mapa interativo e façam a pré-inscrição de alunos — enquanto a Secretaria de Educação e as unidades escolares ganham uma área administrativa para gerenciar vagas, alunos e listas de espera, com classificação automática baseada em critérios definidos pelo sistema.',
                'context' => 'O acesso a vagas na rede municipal de ensino costuma depender de contato direto com cada escola ou com a Secretaria, sem um canal digital único de consulta por região, bairro ou série.',
                'problem' => 'Pais e responsáveis não tinham como visualizar de forma centralizada quais escolas tinham vagas disponíveis, e a gestão escolar não contava com uma ferramenta própria para administrar vagas, alunos e listas de espera de forma automatizada.',
                'objective' => 'Construir, nas 30 horas do hackathon, uma plataforma que unisse consulta pública de vagas com um painel administrativo completo para a gestão escolar — incluindo classificação automática de listas de espera.',
                'solution' => 'A equipe implementou consulta pública com filtros por região, bairro e série, visualização das unidades em mapa interativo e um fluxo de pré-inscrição de alunos. Do lado administrativo, a Secretaria e as escolas ganharam um painel para gerenciar vagas, alunos e listas de espera, com classificação automática dos alunos conforme critérios definidos pelo sistema e controle de acesso conforme o perfil de cada usuário.',
                'process' => null,
                'decisions' => null,
                'result' => 'Protótipo funcional apresentado ao final do Hackathon IFSP 2026, cobrindo consulta pública com mapa interativo e um painel administrativo com gestão de vagas, alunos e listas de espera.',
                'learnings' => null,
                'tags' => json_encode(['PHP', 'Laravel 13', 'Livewire 3', 'Alpine.js', 'Tailwind CSS 4', 'MySQL', 'Laravel Jetstream', 'Sanctum']),
                'image' => 'img/vagaFacil/capa.jpg',
                'gallery' => json_encode([
                    ['path' => 'img/vagaFacil/capa.jpg', 'type' => 'cover', 'caption' => null],
                    ['path' => 'img/vagaFacil/1783401851443.jpg', 'type' => 'screenshot', 'caption' => null],
                    ['path' => 'img/vagaFacil/WhatsApp Image 2026-08-11 at 19.13.57.jpeg', 'type' => 'screenshot', 'caption' => null],
                ]),
                'video' => 'img/vagaFacil/Gravação de Tela 2026-07-05 222436.mp4',
                'external_url' => null,
                'linkedin_url' => 'https://www.linkedin.com/posts/kleiton-ferreira_hackathon-ifsp-ugcPost-7480129526455402496-ARIQ/',
                'repo_url' => null,
                'is_featured' => false,
                'is_award' => false,
                'award_label' => null,
                'position' => 3,
            ],
        ];

        foreach ($projects as $project) {
            DB::table('projects')->updateOrInsert(
                ['slug' => $project['slug']],
                $project
            );
        }
    }
}
