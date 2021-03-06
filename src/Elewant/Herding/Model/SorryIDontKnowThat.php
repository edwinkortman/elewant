<?php

declare(strict_types=1);

namespace Elewant\Herding\Model;

use Exception;

final class SorryIDontKnowThat extends Exception
{
    public static function event($aggregate, $class)
    {
        return new self(
            sprintf("Sorry, I (%s) don't know how to apply %s ", get_class($aggregate), get_class($class))
        );
    }
}
