<?php

namespace App\Domain\UseCases\SoilChemicalAnalysis\Create;

class OutputCreateSoilChemicalAnalysisDto
{
    public function __construct(
        public int $id,
        public float $soilType,
        public float $hydrogenPotential,
        public float $phosphorus,
        public float $potassium,
        public float $calcium,
        public float $magnesium,
        public float $aluminum,
        public float $baseSum,
        public float $effectiveCtc,
        public float $potentialAcidity,
        public float $cationExchangeCapacityAtPh7,
        public float $baseSaturation,
        public float $aluminumSaturation,
        public float $organicMatter,
    ) {}
}
