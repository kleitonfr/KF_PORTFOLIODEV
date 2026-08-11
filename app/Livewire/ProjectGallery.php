<?php

namespace App\Livewire;

use App\Services\PortfolioService;
use Livewire\Component;

class ProjectGallery extends Component
{
    public array $projetos = [];

    public function mount(PortfolioService $servicoPortfolio): void
    {
        $this->projetos = $servicoPortfolio->obterDadosDaPagina()['projects'];
    }

    public function render()
    {
        return view('livewire.project-gallery');
    }
}
