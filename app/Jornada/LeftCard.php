<?php

namespace App\Jornada;

class LeftCard extends JourneyCardsLayout
{
    public function shapeJourneyCards(string $shape): string
    {
        return '[clip-path: polygon(0 20%, 74% 20%, 100% 52%, 74% 82%, 0 83%);]';
    }

    public function showImagesOnJorneyCards(bool $show): bool
    {
        return false;
    }

    public function addClassToBeUsedByGSAP(string $className): string
    {
        return 'journey-card-left';
    }
}