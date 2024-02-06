<?php

namespace App\Domain\Entity;

use App\Domain\Entity\Traits\MagicMethodsTrait;

class SoilChemicalAnalysis
{
    use MagicMethodsTrait;

    public function __construct(
        protected float $soil_type,
        protected float $hydrogen_potential,
        protected float $phosphorus,
        protected float $potassium,
        protected float $calcium,
        protected float $magnesium,
        protected float $aluminum,
        protected float $base_sum,
        protected float $effective_ctc,
        protected float $potential_acidity,
        protected float $cation_exchange_capacity_at_ph_7,
        protected float $base_saturation,
        protected float $aluminum_saturation,
        protected float $organic_matter,
    ) {

    }
}
