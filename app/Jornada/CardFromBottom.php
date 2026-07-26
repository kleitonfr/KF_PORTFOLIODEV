<?php

namespace App\Jornada;

class CardFromBottom extends JourneyCardsLayout {
    
    public function shapeJourneyCards(string $shape): string
    {
        return '[clip-path: polygon(50% 0%, 100% 47%, 100% 100%, 0 100%, 0 47%);]';
    }

    public function showImagesOnJorneyCards(bool $show): bool
    {
        return false;
    }

    public function addClassToBeUsedByGSAP(string $className): string
    {
        return 'journey-card-from-bottom';
    }
}