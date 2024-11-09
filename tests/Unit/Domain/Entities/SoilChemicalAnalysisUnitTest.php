<?php

namespace Tests\Unit\Domain\Entities;

use App\Domain\Entities\SoilChemicalAnalysis;
use Tests\TestCase;

class SoilChemicalAnalysisUnitTest extends TestCase
{
    public function testAttributes(): void
    {
        $soilChemicalAnalysis = $this->createSoilChemicalAnalysisObject();

        $this->assertEquals(1.2, $soilChemicalAnalysis->soilType);
        $this->assertEquals(2.3, $soilChemicalAnalysis->hydrogenPotential);
        $this->assertEquals(3.4, $soilChemicalAnalysis->phosphorus);
        $this->assertEquals(4.5, $soilChemicalAnalysis->potassium);
        $this->assertEquals(5.6, $soilChemicalAnalysis->calcium);
        $this->assertEquals(6.7, $soilChemicalAnalysis->magnesium);
        $this->assertEquals(7.8, $soilChemicalAnalysis->aluminum);
        $this->assertEquals(8.9, $soilChemicalAnalysis->baseSum);
        $this->assertEquals(9.1, $soilChemicalAnalysis->effectiveCtc);
        $this->assertEquals(10, $soilChemicalAnalysis->potentialAcidity);
        $this->assertEquals(10.1, $soilChemicalAnalysis->cationExchangeCapacityAtPh7);
        $this->assertEquals(10.2, $soilChemicalAnalysis->baseSaturation);
        $this->assertEquals(10.3, $soilChemicalAnalysis->aluminumSaturation);
        $this->assertEquals(10.4, $soilChemicalAnalysis->organicMatter);
    }

    private function createSoilChemicalAnalysisObject(): SoilChemicalAnalysis
    {
        return new SoilChemicalAnalysis(
            soilType: 1.2,
            hydrogenPotential: 2.3,
            phosphorus: 3.4,
            potassium: 4.5,
            calcium: 5.6,
            magnesium: 6.7,
            aluminum: 7.8,
            baseSum: 8.9,
            effectiveCtc: 9.1,
            potentialAcidity: 10,
            cationExchangeCapacityAtPh7: 10.1,
            baseSaturation: 10.2,
            aluminumSaturation: 10.3,
            organicMatter: 10.4,
        );
    }

    public function testUpdate(): void
    {
        $soilChemicalAnalysis = $this->createSoilChemicalAnalysisObject();

        $soilChemicalAnalysis->update(
            soilType: 1,
            hydrogenPotential: 1,
            phosphorus: 1,
            potassium: 1,
            calcium: 1,
            magnesium: 1,
            aluminum: 1,
            baseSum: 1,
            effectiveCtc: 1,
            potentialAcidity: 1,
            cationExchangeCapacityAtPh7: 1,
            baseSaturation: 1,
            aluminumSaturation: 1,
            organicMatter: 1,
        );

        $this->assertEquals(1, $soilChemicalAnalysis->soilType);
        $this->assertEquals(1, $soilChemicalAnalysis->hydrogenPotential);
        $this->assertEquals(1, $soilChemicalAnalysis->phosphorus);
        $this->assertEquals(1, $soilChemicalAnalysis->potassium);
        $this->assertEquals(1, $soilChemicalAnalysis->calcium);
        $this->assertEquals(1, $soilChemicalAnalysis->magnesium);
        $this->assertEquals(1, $soilChemicalAnalysis->aluminum);
        $this->assertEquals(1, $soilChemicalAnalysis->baseSum);
        $this->assertEquals(1, $soilChemicalAnalysis->effectiveCtc);
        $this->assertEquals(1, $soilChemicalAnalysis->potentialAcidity);
        $this->assertEquals(1, $soilChemicalAnalysis->cationExchangeCapacityAtPh7);
        $this->assertEquals(1, $soilChemicalAnalysis->baseSaturation);
        $this->assertEquals(1, $soilChemicalAnalysis->aluminumSaturation);
        $this->assertEquals(1, $soilChemicalAnalysis->organicMatter);
    }
}
