<?php

namespace AurimasNiekis\GmoAozoraSimpleClient;

use Buzz\Client\Curl;
use Nyholm\Psr7\Factory\Psr17Factory;
use AurimasNiekis\GmoAozoraClient\WebClient;
use AurimasNiekis\GmoAozoraClient\Configuration;

/**
 * @package AurimasNiekis\GmoAozoraSimpleClient
 * @author  Aurimas Niekis <aurimas@niekis.lt>
 */
class SimpleClient extends \AurimasNiekis\GmoAozoraClient\Client
{
    public function __construct(Configuration $config)
    {
        $factory = new Psr17Factory();
        $client  = new Curl($factory);

        $webClient = new WebClient($config, $client, $factory, $factory);

        parent::__construct($webClient);
    }
}