<?php

namespace App\AbstractFactory\Pattern\Abstract_\Bottle;

use App\AbstractFactory\Pattern\Abstract_\Cover\AbstractCover;
use App\AbstractFactory\Pattern\Abstract_\Water\AbstractWater;

abstract class AbstractBottle
{
    public abstract function interact(AbstractWater $water): void;
    public abstract function interactC(AbstractCover $cover): void;
}