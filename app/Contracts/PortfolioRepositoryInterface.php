<?php

namespace App\Contracts;

interface PortfolioRepositoryInterface
{
    public function getHeroData(): array;

    public function getJourneyItems(): array;

    public function getProjects(): array;

    public function getProjectBySlug(string $slug): ?array;

    public function getSocialLinks(): array;
}
