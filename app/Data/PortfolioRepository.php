<?php

namespace App\Data;

use App\Contracts\PortfolioRepositoryInterface;
use Illuminate\Support\Facades\DB;

class PortfolioRepository implements PortfolioRepositoryInterface
{
    public function getHeroData(): array
    {
        return [
            'name' => 'Kleiton Ferreira',
            'role' => 'Desenvolvedor Full Stack & Designer',
            'headline' => 'Transformo problemas reais em experiências digitais claras, acessíveis e com impacto social.',
            'location' => 'Caraguatatuba · São Paulo',
            'avatar' => null,
            'highlights' => [
                ['value' => 'Laravel', 'label' => 'Laravel', 'icon' => '⚙️'],
                ['value' => 'Tailwind', 'label' => 'Tailwind', 'icon' => '🎨'],
                ['value' => 'Livewire', 'label' => 'Livewire', 'icon' => '⚡'],
                ['value' => 'SQLite', 'label' => 'SQLite', 'icon' => '🗄️'],
            ],
        ];
    }

    public function getJourneyItems(): array
    {
        return [
            [
                'period' => '2019 — 2020',
                'title' => 'Iniciação Científica',
                'desc' => 'Desenvolvi o artigo "O valor propagandístico da Fake News", aprofundando meus conhecimentos em pesquisa acadêmica, análise crítica e interpretação de dados. A experiência também fortaleceu minhas habilidades de escrita científica, argumentação e comunicação, além de proporcionar a apresentação dos resultados em eventos acadêmicos.',
                'direction' => 'left',
                'tags' => ['Aprendizado contínuo', 'Análise', 'Pesquisa', 'CNPQ'],
            ],
            [
                'period' => '2019 — 2021',
                'title' => 'Estágio de Administração',
                'desc' => 'Análise diária de documentos, registro e acompanhamento em planilha excel e alimentação de banco de dados. Atendimento ao público, cadastro e acompanhamento da agenda de pacientes do dia, busca ativa por telefone.',
                'direction' => 'right',
                'tags' => ['Responsabilidade', 'Organização', 'Adaptabilidade'],
            ],
            [
                'period' => '2021 — 2022',
                'title' => 'Estoquista',
                'desc' => 'Era responsável por receber, conferir e armazenar mercadorias, recepcionar o transportador, bem como o controle e cadastro da DANFE em sistema ERP.',
                'direction' => 'left',
                'tags' => ['Organização', 'Atenção aos detalhes', 'ERP', 'Controle de NF'],

            ],

            [
                'images' => ['image-1', 'image-2'],
            ],

            [
                'period' => '2022 — 2023',
                'title' => 'Agente Administrativo — SESEP',
                'desc' => 'Atuei como Agente Administrativo na Secretaria de Serviço Público, desempenhando atividades administrativas e de organização de informações. Nesse período, desenvolvi um dashboard para automatizar a consolidação de dados e a geração de relatórios mensais, contribuindo para maior eficiência, agilidade na análise de indicadores e apoio à tomada de decisões.',
                'direction' => 'right',
                'tags' => ['Gestão Pública', 'Resolução de problemas', 'Inovação'],
                'images' => ['image-1', 'image-2', 'image-3'],
            ],

            [
                'images' => ['image-1', 'image-2'],
            ],

            [
                'period' => '2022 — 2024',
                'title' => 'Analista Service Desk — STII',
                'desc' => 'Liderei o ranking interno de chamados solucionados por três meses consecutivos, atuando em múltiplos grupos: Sistemas, Helpdesk, Segurança de Rede e Embras-Atendimentos.',
                'direction' => 'left',
                'tags' => ['Suporte Técnico', 'Liderança', 'Excelência no atendimento'],
            ],

            [
                'images' => ['image-1', 'image-2', 'image-3'],
            ],

            [
                'period' => '2025 — 2026',
                'title' => 'Desenvolvedor Fullstack',
                'desc' => 'Portal + software de governança para exercício de direitos LGPD. OAuth 2.0 + PKCE gov.br, 3 conexões de banco, acessibilidade e-MAG.',
                'direction' => 'right',
                'tags' => ['Desenvolvimento de Sistemas', 'Sistemas WEB', 'API', 'PHP', 'Laravel', 'SQL'],
            ],
        ];
    }

    public function getProjects(): array
    {
        return DB::connection('sqlite')->table('projects')->orderBy('position')->get()->map(function ($project) {
            return $this->mapProject($project);
        })->all();
    }

    public function getProjectBySlug(string $slug): ?array
    {
        $project = DB::connection('sqlite')->table('projects')->where('slug', $slug)->first();

        return $project ? $this->mapProject($project) : null;
    }

    public function getSocialLinks(): array
    {
        return [
            ['label' => 'GitHub', 'url' => 'https://github.com/kleitonferreira', 'icon' => 'GH'],
            ['label' => 'LinkedIn', 'url' => 'https://www.linkedin.com/in/kleiton-ferreira-a956b0155/', 'icon' => 'in'],
            ['label' => 'E-mail', 'url' => 'mailto:kleytonferreira9@gmail.com', 'icon' => '@'],
        ];
    }

    public function getTestimonials(): array
    {
        return [
            [
                'image' => 'img/Comentarios/chefe.jpg',
                'role' => 'Gestor(a) direto(a)',
            ],
            [
                'image' => 'img/Comentarios/colegaDeTrabalho.jpg',
                'role' => 'Colega de trabalho',
            ],
            [
                'image' => 'img/Comentarios/colegaDeHackathon.jpg',
                'role' => 'Colega de hackathon',
            ],
        ];
    }

    private function mapProject(object $project): array
    {
        return [
            'id' => $project->id,
            'title' => $project->title,
            'subtitle' => $project->subtitle,
            'excerpt' => $project->excerpt,
            'description' => $project->description,
            'tags' => json_decode($project->tags, true) ?: [],
            'image' => $project->image,
            'slug' => $project->slug,
            'is_featured' => (bool) $project->is_featured,

            // Metadados do case
            'role' => $project->role ?? null,
            'year' => $project->year ?? null,
            'status' => $project->status ?? null,
            'client' => $project->client ?? null,

            // Estrutura narrativa (nem todo projeto preenche tudo)
            'context' => $project->context ?? null,
            'problem' => $project->problem ?? null,
            'objective' => $project->objective ?? null,
            'solution' => $project->solution ?? null,
            'process' => $project->process ?? null,
            'decisions' => $project->decisions ?? null,
            'result' => $project->result ?? null,
            'learnings' => $project->learnings ?? null,

            // Mídia
            'gallery' => json_decode($project->gallery ?? '[]', true) ?: [],
            'video' => $project->video ?? null,

            // Links externos
            'external_url' => $project->external_url ?? null,
            'linkedin_url' => $project->linkedin_url ?? null,
            'repo_url' => $project->repo_url ?? null,

            // Reconhecimento
            'is_award' => (bool) ($project->is_award ?? false),
            'award_label' => $project->award_label ?? null,
        ];
    }
}
