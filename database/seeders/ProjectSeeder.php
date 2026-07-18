<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        $projects = [
            [
                'slug' => 'portal-lgpd360',
                'title' => 'Portal LGPD360',
                'subtitle' => 'Portal de Direitos Digitais',
                'excerpt' => 'Experiência pública com foco em acessibilidade e governança.',
                'description' => 'Este é um modelo de artigo para o projeto. Substitua este texto por uma descrição completa, resultados, processo e links.',
                'tags' => json_encode(['Laravel', 'Livewire', 'Tailwind', 'SQLite']),
                'image' => null,
                'is_featured' => true,
                'position' => 1,
            ],
            [
                'slug' => 'mapeamento-lgpd',
                'title' => 'Mapeamento LGPD',
                'subtitle' => 'Gestão e auditoria',
                'excerpt' => 'Estrutura robusta para acompanhamento de processos e conformidade.',
                'description' => 'Modelo de artigo para apresentar a solução, os desafios enfrentados e o valor entregue ao usuário.',
                'tags' => json_encode(['Governança', 'UI', 'PHP']),
                'image' => null,
                'is_featured' => false,
                'position' => 2,
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
