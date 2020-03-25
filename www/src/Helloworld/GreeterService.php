<?php

namespace Helloworld;

use Spiral\GRPC\ContextInterface;

class GreeterService implements GreeterInterface
{
    public function SayHello(ContextInterface $ctx, HelloRequest $request): HelloReply
    {
        $out = new HelloReply();
        return $out->setMessage("Hello " . $request->getName());
    }
}
