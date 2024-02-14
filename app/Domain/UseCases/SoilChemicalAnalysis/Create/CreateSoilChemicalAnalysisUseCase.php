<?php

namespace App\Domain\UseCases\SoilChemicalAnalysis\Create;

use App\Domain\Entities\SoilChemicalAnalysis;
use App\Domain\Repositories\SoilChemicalAnalysisRepositoryInterface;
use App\Domain\UseCases\SoilChemicalAnalysis\Create\OutputCreateSoilChemicalAnalysisDto;

class CreateSoilChemicalAnalysisUseCase
{
    public function __construct(
        private SoilChemicalAnalysisRepositoryInterface $repository
    ) {
        $this->repository = $repository;
    }

    public function handle(
        InputCreateSoilChemicalAnalysisDto $input
    ) : OutputCreateSoilChemicalAnalysisDto
    {
        $entity = new SoilChemicalAnalysis(
            null,
            soilType: $input->soilType,
            hydrogenPotential: $input->hydrogenPotential,
            phosphorus: $input->phosphorus,
            potassium: $input->potassium,
            calcium: $input->calcium,
            magnesium: $input->magnesium,
            aluminum: $input->aluminum,
            baseSum: $input->baseSum,
            effectiveCtc: $input->effectiveCtc,
            potentialAcidity: $input->potentialAcidity,
            cationExchangeCapacityAtPh7: $input->cationExchangeCapacityAtPh7,
            baseSaturation: $input->baseSaturation,
            aluminumSaturation: $input->aluminumSaturation,
            organicMatter: $input->organicMatter,
        );

        $entity = $this->repository->create($entity);

        return new OutputCreateSoilChemicalAnalysisDto(
            id: $entity->id,
            soilType: $entity->soilType,
            hydrogenPotential: $entity->hydrogenPotential,
            phosphorus: $entity->phosphorus,
            potassium: $entity->potassium,
            calcium: $entity->calcium,
            magnesium: $entity->magnesium,
            aluminum: $entity->aluminum,
            baseSum: $entity->baseSum,
            effectiveCtc: $entity->effectiveCtc,
            potentialAcidity: $entity->potentialAcidity,
            cationExchangeCapacityAtPh7: $entity->cationExchangeCapacityAtPh7,
            baseSaturation: $entity->baseSaturation,
            aluminumSaturation: $entity->aluminumSaturation,
            organicMatter: $entity->organicMatter,
        );
    }
}
