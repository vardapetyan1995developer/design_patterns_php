<?php

namespace App\Builder\House;

class House
{
    private array $parts = [];

    public function add(mixed $part): void
    {
        $this->parts[] = $part;
    }
}