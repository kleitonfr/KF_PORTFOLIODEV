<?php

namespace App\Jornada;


class FullScreenCard extends JourneyCardsLayout
{
    public function shapeJourneyCards(string $shape): string
    {
        return '';
    }

    public function showImagesOnJorneyCards(bool $show): bool
    {
        return false;
    }

    public function addClassToBeUsedByGSAP(string $className): string
    {
        return 'journey-card-fullscreen';
    }
}