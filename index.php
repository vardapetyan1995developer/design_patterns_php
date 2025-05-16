<?php

use App\AbstractFactory\Pattern\Abstract_\Factory\CocaColaFactory;
use App\AbstractFactory\Pattern\Abstract_\Factory\PepsiFactory;
use App\AbstractFactory\Pattern\Client;
use App\Builder\Pattern\Builder\ConcreteBuilder;
use App\Builder\Pattern\Foreman;
use App\Builder1\Builder\HttpRequestBuilder;

require_once 'vendor/autoload.php';

#region Abstract Factory
$client = null;

$client = new Client(new CocaColaFactory);
$client->run();

$client = new Client(new PepsiFactory);
$client->run();
#endregion

#region Builder
$builder = new ConcreteBuilder;
$foreman = new Foreman($builder);

$foreman->construct();

$house = $builder->GetResult();
#endregion

#region Builder1
 $requestBuilder = new HttpRequestBuilder();

 $request = $requestBuilder
     ->setUrl('http://localhost:8000')
     ->setMethod('get')
     ->addQueryParam('v', 1)
     ->addHeader('Authorization', 'Bearer 123')
     ->setBody("{'name' : 'Tom', 'age' : 25}")
     ->build();

 echo $request;
#endregion
