<?php

namespace App\AbstractFactory\Pattern\Abstract_\Factory;

use App\AbstractFactory\Pattern\Abstract_\Bottle\AbstractBottle;
use App\AbstractFactory\Pattern\Abstract_\Cover\AbstractCover;
use App\AbstractFactory\Pattern\Abstract_\Water\AbstractWater;

abstract class AbstractFactory
{
    public abstract function makeBottle(): AbstractBottle;
    public abstract function makeWater(): AbstractWater;
    public abstract function makeCover(): AbstractCover;
}