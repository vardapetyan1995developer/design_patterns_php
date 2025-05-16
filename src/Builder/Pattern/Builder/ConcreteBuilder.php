<?php

namespace App\Builder\Pattern\Builder;

use App\Builder\House\Basement;
use App\Builder\House\House;
use App\Builder\House\Roof;
use App\Builder\House\Storey;

class ConcreteBuilder extends Builder
{
    private House $house;

    public function __construct()
    {
        $this->house = new House();
    }

    public function buildBasement(): void
    {
        $this->house->add(new Basement);
    }

    public function buildStorey(): void
    {
        $this->house->add(new Storey);
    }

    public function buildRoof(): void
    {
        $this->house->add(new Roof);
    }

    public function GetResult(): House
    {
        return $this->house;
    }
}