<?php

namespace App\Builder\Pattern\Builder;

use App\Builder\House\House;

abstract class Builder
{
    public abstract function buildBasement(): void;
    public abstract function buildStorey(): void;
    public abstract function buildRoof(): void;
    public abstract function GetResult(): House;
}