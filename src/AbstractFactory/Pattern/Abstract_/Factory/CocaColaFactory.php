<?php

namespace App\AbstractFactory\Pattern\Abstract_\Factory;

use App\AbstractFactory\Pattern\Abstract_\Bottle\AbstractBottle;
use App\AbstractFactory\Pattern\Abstract_\Bottle\CocaColaBottle;
use App\AbstractFactory\Pattern\Abstract_\Cover\AbstractCover;
use App\AbstractFactory\Pattern\Abstract_\Cover\CocaColaCover;
use App\AbstractFactory\Pattern\Abstract_\Water\AbstractWater;
use App\AbstractFactory\Pattern\Abstract_\Water\CocaColaWater;
use Override;

class CocaColaFactory extends AbstractFactory
{
    #[Override]public function makeBottle(): AbstractBottle
    {
        return new CocaColaBottle;
    }

    #[Override]public function makeWater(): AbstractWater
    {
        return new CocaColaWater;
    }

    #[Override]public function makeCover(): AbstractCover
    {
        return new CocaColaCover;
    }
}