<?php

namespace App\Services;

use App\Contracts\PortfolioRepositoryInterface;

class PortfolioService
{
    public function __construct(protected PortfolioRepositoryInterface $repositorio)
    {
    }

    public function obterDadosDaPagina(): array
    {
        return [
            'journey' => $this->repositorio->obterItensDaJornada(),
            'projects' => $this->repositorio->obterProjetos(),
            'socialLinks' => $this->repositorio->obterRedesSociais(),
            'testimonials' => $this->repositorio->obterDepoimentos(),
        ];
    }

    public function obterProjetoPorSlug(string $slug): ?array
    {
        return $this->repositorio->obterProjetoPorSlug($slug);
    }
}
