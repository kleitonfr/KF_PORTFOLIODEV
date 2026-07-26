<?php

namespace App\Livewire;

use App\Services\PortfolioService;
use Livewire\Component;

class ProjectGallery extends Component
{
    public array $projects = [];

    public function mount(PortfolioService $service): void
    {
        $this->projects = $service->getPageData()['projects'];
    }

    public function render()
    {
        return view('livewire.project-gallery');
    }
}
