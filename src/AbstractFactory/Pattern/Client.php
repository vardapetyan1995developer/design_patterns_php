<?php

namespace App\AbstractFactory\Pattern;

use App\AbstractFactory\Pattern\Abstract_\Bottle\AbstractBottle;
use App\AbstractFactory\Pattern\Abstract_\Cover\AbstractCover;
use App\AbstractFactory\Pattern\Abstract_\Factory\AbstractFactory;
use App\AbstractFactory\Pattern\Abstract_\Water\AbstractWater;

readonly class Client
{
    private AbstractBottle $bottle;
    private AbstractWater $water;
    private AbstractCover $cover;

    public function __construct(AbstractFactory $factory)
    {
        $this->bottle = $factory->makeBottle();
        $this->water = $factory->makeWater();
        $this->cover = $factory->makeCover();
    }

    public function run(): void
    {
        $this->bottle->interact($this->water);
        $this->bottle->interactC($this->cover);
    }
}