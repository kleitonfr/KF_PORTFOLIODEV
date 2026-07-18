<?php

namespace App\Livewire;

use App\Services\PortfolioService;
use Livewire\Component;

class ProjectGallery extends Component
{
    public array $projects = [];

    public string $selectedSlug = '';

    public function mount(PortfolioService $service): void
    {
        $data = $service->getPageData();
        $this->projects = $data['projects'];
    }

    public function openProject(string $slug): void
    {
        $this->selectedSlug = $slug;
    }

    public function closeProject(): void
    {
        $this->selectedSlug = '';
    }

    public function render()
    {
        $project = collect($this->projects)->firstWhere('slug', $this->selectedSlug);

        return view('livewire.project-gallery', ['project' => $project]);
    }
}
