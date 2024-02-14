<?php

namespace App\Domain\Entities;

use App\Domain\Entities\Traits\MagicMethodsTrait;

class SoilChemicalAnalysis
{
    use MagicMethodsTrait;

    public function __construct(
        protected $id = '',
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

    public function update(
        float $soilType,
        float $hydrogenPotential,
        float $phosphorus,
        float $potassium,
        float $calcium,
        float $magnesium,
        float $aluminum,
        float $baseSum,
        float $effectiveCtc,
        float $potentialAcidity,
        float $cationExchangeCapacityAtPh7,
        float $baseSaturation,
        float $aluminumSaturation,
        float $organicMatter,
    ) : void
    {
        $this->soilType = $soilType;
        $this->hydrogenPotential = $hydrogenPotential;
        $this->phosphorus = $phosphorus;
        $this->potassium = $potassium;
        $this->calcium = $calcium;
        $this->magnesium = $magnesium;
        $this->aluminum = $aluminum;
        $this->baseSum = $baseSum;
        $this->effectiveCtc = $effectiveCtc;
        $this->potentialAcidity = $potentialAcidity;
        $this->cationExchangeCapacityAtPh7 = $cationExchangeCapacityAtPh7;
        $this->baseSaturation = $baseSaturation;
        $this->aluminumSaturation = $aluminumSaturation;
        $this->organicMatter = $organicMatter;
    }
}
