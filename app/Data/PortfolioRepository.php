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
                'period' => '2017 — 2020',
                'title' => 'Primeiros passos',
                'desc' => 'Atuei com suporte e organização de processos em ambientes públicos, o que me ensinou muito sobre empatia e clareza.',
                'direction' => 'left',
                'tags' => [],
            ],
            [
                'period' => '2020 — 2022',
                'title' => 'Transição para tecnologia',
                'desc' => 'Iniciei a formação em Análise e Desenvolvimento de Sistemas e passei a construir soluções com mais protagonismo.',
                'direction' => 'right',
                'tags' => [],
            ],
            [
                'period' => '2022 — 2024',
                'title' => 'Help Desk e entregas reais',
                'desc' => 'Atuei em ambientes de suporte técnico, liderando resolução de demandas e entendendo o valor da operação.',
                'direction' => 'left',
                'tags' => [],
            ],
            [
                'period' => '2024 — 2026',
                'title' => 'Desenvolvimento full stack',
                'desc' => 'Passei a criar aplicações para o setor público, com foco em usabilidade, governança e impacto social.',
                'direction' => 'right',
                'tags' => [],
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
        ];
    }
}
