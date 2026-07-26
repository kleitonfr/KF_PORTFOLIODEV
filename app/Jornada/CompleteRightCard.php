<?php

namespace App\Jornada;

class CompleteRightCard extends JourneyCardsLayout {
    
    public function shapeJourneyCards(string $shape): string
    {
        return '[clip-path: polygon(25% 0%, 100% 0%, 100% 100%, 25% 100%, 0% 50%);]';
    }

    public function showImagesOnJorneyCards(bool $show): bool
    {
        return true;
    }

    public function addClassToBeUsedByGSAP(string $className): string
    {
        return 'journey-card-complete-right';
    }
}