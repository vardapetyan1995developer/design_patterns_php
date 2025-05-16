<?php

namespace App\Builder1\Builder;


use App\Builder1\Entities\HttpRequest;

class HttpRequestBuilder extends BaseHttpRequestBuilder
{
    private HttpRequest $httpRequest;

    public function __construct()
    {
        $this->httpRequest = new HttpRequest();
    }

    public function setUrl(string $url): BaseHttpRequestBuilder
    {
        $this->httpRequest->url = $url;

        return $this;
    }

    public function setMethod(string $method): BaseHttpRequestBuilder
    {
        $this->httpRequest->method = $method;

        return $this;
    }

    public function addQueryParam(string $key, string $value): BaseHttpRequestBuilder
    {
        $this->httpRequest->queryParams[$key] = $value;

        return $this;
    }

    public function addHeader(string $key, string $value): BaseHttpRequestBuilder
    {
        $this->httpRequest->headers[$key] = $value;

        return $this;
    }

    public function setBody(string $body): BaseHttpRequestBuilder
    {
        $this->httpRequest->body = $body;

        return $this;
    }

    public function build(): HttpRequest
    {
        return $this->httpRequest;
    }
}