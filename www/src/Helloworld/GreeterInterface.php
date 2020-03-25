<?php

namespace Helloworld;

use Spiral\GRPC;

interface GreeterInterface extends GRPC\ServiceInterface
{
    // GRPC specific service name.
    public const NAME = "helloworld.Greeter";

    /**
     * @param GRPC\ContextInterface $ctx
     *
     * @param HelloRequest $request
     * @return HelloReply
     */
    public function SayHello(GRPC\ContextInterface $ctx, HelloRequest $request): HelloReply;
}