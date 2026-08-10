<?php

namespace App\Services;

use App\Contracts\PortfolioRepositoryInterface;

class PortfolioService
{
    public function __construct(protected PortfolioRepositoryInterface $repository)
    {
    }

    public function getPageData(): array
    {
        return [
            'hero' => $this->repository->getHeroData(),
            'journey' => $this->repository->getJourneyItems(),
            'projects' => $this->repository->getProjects(),
            'socialLinks' => $this->repository->getSocialLinks(),
            'testimonials' => $this->repository->getTestimonials(),
        ];
    }

    public function getProjectBySlug(string $slug): ?array
    {
        return $this->repository->getProjectBySlug($slug);
    }
}
