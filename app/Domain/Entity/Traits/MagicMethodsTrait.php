<?php

namespace App\Domain\Entity\Traits;

use App\Domain\Exceptions\PropertyNotFoundException;

trait MagicMethodsTrait
{
    public function __get($property)
    {
        if (isset($this->{$property}))
            return $this->{$property};

        $className = get_class($this);

        throw new PropertyNotFoundException("Property {$property} not found in {$className}", 1);
    }
}

