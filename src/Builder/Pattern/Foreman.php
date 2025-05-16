<?php

namespace App\Builder\Pattern;

use App\Builder\Pattern\Builder\Builder;

class Foreman
{
    private Builder $builder;

    public function __construct(Builder $builder)
    {
        $this->builder = $builder;
    }

    public function construct(): void
    {
        $this->builder->buildBasement();
        $this->builder->buildStorey();
        $this->builder->buildRoof();
    }
}