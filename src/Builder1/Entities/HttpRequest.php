<?php

namespace App\Builder1\Entities;

class HttpRequest
{
    public ?string $url = null;
    public ?string $method = null;
    public array $queryParams = [];
    public array $headers = [];
    public ?string $body = null;

    public function __toString(): string
    {
        $queryParams = implode('&', array_map(
            fn($key, $value) => "$key=$value",
            array_keys($this->queryParams),
            $this->queryParams
        ));

        $headers = implode(', ', $this->headers);

        return "Method: $this->method, Url: $this->url?$queryParams, Headers: [$headers], Body: $this->body";
    }
}