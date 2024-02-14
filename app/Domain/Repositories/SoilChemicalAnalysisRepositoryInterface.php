<?php

namespace App\Domain\Repositories;

use App\Domain\Entities\SoilChemicalAnalysis;

interface SoilChemicalAnalysisRepositoryInterface
{
    public function create(SoilChemicalAnalysis $soulChemicalAnalysis) : SoilChemicalAnalysis;
}
