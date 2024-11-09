<?php

namespace Tests\Unit\Domain\Entities\Traits;

use App\Domain\Entities\Traits\MagicMethodsTrait;
use App\Domain\Exceptions\PropertyNotFoundException;
use Tests\TestCase;

class MagicMethodsTraitUnitTest extends TestCase
{
    public function testAttributeExists(): void
    {
        $objetc = $this->getObject();

        $result = $objetc->attribute;

        $this->assertEquals('My test', $result);
    }

    public function testAttributeDoesNotExists(): void
    {
        $object = $this->getObject();
        $property = 'undefinedProperty';

        $this->expectException(PropertyNotFoundException::class);
        $this->expectExceptionMessage("Property {$property} not found in class@anonymous");

        $object->{$property};
    }

    private function getObject(): object
    {
        return new class
        {
            use MagicMethodsTrait;

            private string $attribute = 'My test';
        };
    }
}
