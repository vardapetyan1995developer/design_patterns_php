<?php

namespace App\AbstractFactory\Pattern\Abstract_\Factory;

use App\AbstractFactory\Pattern\Abstract_\Bottle\AbstractBottle;
use App\AbstractFactory\Pattern\Abstract_\Bottle\PepsiBottle;
use App\AbstractFactory\Pattern\Abstract_\Cover\AbstractCover;
use App\AbstractFactory\Pattern\Abstract_\Cover\PepsiCover;
use App\AbstractFactory\Pattern\Abstract_\Water\AbstractWater;
use App\AbstractFactory\Pattern\Abstract_\Water\PepsiWater;
use Override;

class PepsiFactory extends AbstractFactory
{
    #[Override]public function makeBottle(): AbstractBottle
    {
        return new PepsiBottle;
    }

    #[Override]public function makeWater(): AbstractWater
    {
        return new PepsiWater;
    }

    #[Override]public function makeCover(): AbstractCover
    {
        return new PepsiCover;
    }
}