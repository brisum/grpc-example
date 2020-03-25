<?php

use Helloworld\HelloReply;

error_reporting(E_ALL);
ini_set('display_errors', 1);

require dirname(__FILE__).'/vendor/autoload.php';

try {
    $name = !empty($argv[1]) ? $argv[1] : 'Alex 2!';
    $client = new Helloworld\GreeterClient('grpc-server.vsrv.in:50051', [
        'credentials' => Grpc\ChannelCredentials::createInsecure(),
    ]);
    $request = new Helloworld\HelloRequest();
    $request->setName($name);
    /** @var $reply HelloReply */
    list($reply, $status) = $client->SayHello($request)->wait();

    var_dump($reply ? $reply->getMessage() : null);
    var_dump($status);
} catch (Exception $e) {
    var_dump($e);
}
