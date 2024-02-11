<?php

namespace App\Domain\Entity;

use App\Domain\Entity\Traits\MagicMethodsTrait;

class SoilChemicalAnalysis
{
    use MagicMethodsTrait;

    public function __construct(
        protected float $soilType,
        protected float $hydrogenPotential,
        protected float $phosphorus,
        protected float $potassium,
        protected float $calcium,
        protected float $magnesium,
        protected float $aluminum,
        protected float $baseSum,
        protected float $effectiveCtc,
        protected float $potentialAcidity,
        protected float $cationExchangeCapacityAtPh7,
        protected float $baseSaturation,
        protected float $aluminumSaturation,
        protected float $organicMatter,
    ) {

    }
}
