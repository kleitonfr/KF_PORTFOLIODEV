<?php

namespace App\Jornada;

class RightCard extends JourneyCardsLayout
{
    public function shapeJourneyCards(string $shape): string
    {
        return '[clip-path: polygon(26% 20%, 100% 20%, 100% 83%, 26% 82%, 0 52%);]';
    }

    public function showImagesOnJorneyCards(bool $show): bool
    {
        return false;
    }

    public function addClassToBeUsedByGSAP(string $className): string
    {
        return 'journey-card-right';
    }
}