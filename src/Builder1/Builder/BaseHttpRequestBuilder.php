<?php

namespace App\Builder1\Builder;

abstract class BaseHttpRequestBuilder
{
    public abstract function setUrl(string $url): self;
    public abstract function setMethod(string $method): self;
    public abstract function addQueryParam(string $key, string $value): self;
    public abstract function addHeader(string $key, string $value): self;
    public abstract function setBody(string $body): self;
    public abstract function build();
}