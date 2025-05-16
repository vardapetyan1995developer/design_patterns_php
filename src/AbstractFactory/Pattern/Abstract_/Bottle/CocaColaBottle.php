<?php

namespace App\AbstractFactory\Pattern\Abstract_\Bottle;

use App\AbstractFactory\Pattern\Abstract_\Cover\AbstractCover;
use App\AbstractFactory\Pattern\Abstract_\Water\AbstractWater;

class CocaColaBottle extends AbstractBottle
{
    public function interact(AbstractWater $water): void
    {
        echo $this::class . ' interacts with ' . $water::class . PHP_EOL;
    }

    public function interactC(AbstractCover $cover): void
    {
        echo $this::class . ' interacts with ' . $cover::class . PHP_EOL;
    }
}