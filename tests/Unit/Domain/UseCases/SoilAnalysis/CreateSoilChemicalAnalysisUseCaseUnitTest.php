<?php

namespace Tests\Unit\Domain\UseCases\SoilChemicalAnalysis;

use App\Domain\Entities\SoilChemicalAnalysis;
use App\Domain\Repositories\SoilChemicalAnalysisRepositoryInterface;
use App\Domain\UseCases\SoilChemicalAnalysis\Create\CreateSoilChemicalAnalysisUseCase;
use App\Domain\UseCases\SoilChemicalAnalysis\Create\InputCreateSoilChemicalAnalysisDto;
use App\Domain\UseCases\SoilChemicalAnalysis\Create\OutputCreateSoilChemicalAnalysisDto;
use Mockery;
use stdClass;
use Tests\TestCase;

class CreateSoilChemicalAnalysisUseCaseUnitTest extends TestCase
{
    public function testCreateSoilChemicalAnalysis(): void
    {
        $input = new InputCreateSoilChemicalAnalysisDto(
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

        $entityId = 123;
        $entityMock = Mockery::mock(SoilChemicalAnalysis::class, [
            $entityId,
            $input->soilType,
            $input->hydrogenPotential,
            $input->phosphorus,
            $input->potassium,
            $input->calcium,
            $input->magnesium,
            $input->aluminum,
            $input->baseSum,
            $input->effectiveCtc,
            $input->potentialAcidity,
            $input->cationExchangeCapacityAtPh7,
            $input->baseSaturation,
            $input->aluminumSaturation,
            $input->organicMatter,
        ]);
        $repositoryMock = Mockery::mock(stdClass::class, SoilChemicalAnalysisRepositoryInterface::class);
        $repositoryMock->shouldReceive('create')->andReturn($entityMock);

        $useCase = new CreateSoilChemicalAnalysisUseCase($repositoryMock);

        $output = $useCase->handle($input);

        $this->assertInstanceOf(OutputCreateSoilChemicalAnalysisDto::class, $output);
        $this->assertEquals($input->soilType, $output->soilType);
        $this->assertEquals($input->hydrogenPotential, $output->hydrogenPotential);
        $this->assertEquals($input->phosphorus, $output->phosphorus);
        $this->assertEquals($input->potassium, $output->potassium);
        $this->assertEquals($input->calcium, $output->calcium);
        $this->assertEquals($input->magnesium, $output->magnesium);
        $this->assertEquals($input->aluminum, $output->aluminum);
        $this->assertEquals($input->baseSum, $output->baseSum);
        $this->assertEquals($input->effectiveCtc, $output->effectiveCtc);
        $this->assertEquals($input->potentialAcidity, $output->potentialAcidity);
        $this->assertEquals($input->cationExchangeCapacityAtPh7, $output->cationExchangeCapacityAtPh7);
        $this->assertEquals($input->baseSaturation, $output->baseSaturation);
        $this->assertEquals($input->aluminumSaturation, $output->aluminumSaturation);
        $this->assertEquals($input->organicMatter, $output->organicMatter);
    }
}
