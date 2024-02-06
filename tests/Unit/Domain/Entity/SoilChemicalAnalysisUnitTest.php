<?php

namespace Tests\Unit\Domain\Entity;

use App\Domain\Entity\SoilChemicalAnalysis;
use Tests\TestCase;

class SoilChemicalAnalysisUnitTest extends TestCase
{
    public function testAttributes() : void
    {
        $soilChemicalAnalysis = new SoilChemicalAnalysis(
            soil_type: 1.2,
            hydrogen_potential: 2.3,
            phosphorus: 3.4,
            potassium: 4.5,
            calcium: 5.6,
            magnesium: 6.7,
            aluminum: 7.8,
            base_sum: 8.9,
            effective_ctc: 9.1,
            potential_acidity: 10,
            cation_exchange_capacity_at_ph_7: 10.1,
            base_saturation: 10.2,
            aluminum_saturation: 10.3,
            organic_matter: 10.4,
        );

        $this->assertEquals(1.2, $soilChemicalAnalysis->soil_type);
        $this->assertEquals(2.3, $soilChemicalAnalysis->hydrogen_potential);
        $this->assertEquals(3.4, $soilChemicalAnalysis->phosphorus);
        $this->assertEquals(4.5, $soilChemicalAnalysis->potassium);
        $this->assertEquals(5.6, $soilChemicalAnalysis->calcium);
        $this->assertEquals(6.7, $soilChemicalAnalysis->magnesium);
        $this->assertEquals(7.8, $soilChemicalAnalysis->aluminum);
        $this->assertEquals(8.9, $soilChemicalAnalysis->base_sum);
        $this->assertEquals(9.1, $soilChemicalAnalysis->effective_ctc);
        $this->assertEquals(10, $soilChemicalAnalysis->potential_acidity);
        $this->assertEquals(10.1, $soilChemicalAnalysis->cation_exchange_capacity_at_ph_7);
        $this->assertEquals(10.2, $soilChemicalAnalysis->base_saturation);
        $this->assertEquals(10.3, $soilChemicalAnalysis->aluminum_saturation);
        $this->assertEquals(10.4, $soilChemicalAnalysis->organic_matter);
    }
}
