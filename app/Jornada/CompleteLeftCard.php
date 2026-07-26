<?php

namespace App\Jornada;

class CompleteLeftCard extends JourneyCardsLayout
{
    public function shapeJourneyCards(string $shape): string
    {
        return '[clip-path: polygon(100% 0%, 75% 50%, 100% 100%, 25% 100%, 25% 49%, 25% 0%);]';
    }

    public function showImagesOnJorneyCards(bool $show): bool
    {
        return false;
    }

    public function addClassToBeUsedByGSAP(string $className): string
    {
        return 'journey-card-complete-left';
    }
}