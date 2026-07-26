<?php

namespace App\Jornada;

abstract class JourneyCardsLayout
{
    abstract public function shapeJourneyCards(string $shape): string;
    abstract public function showImagesOnJorneyCards(bool $show): bool;
    abstract public function addClassToBeUsedByGSAP(string $className): string;
}