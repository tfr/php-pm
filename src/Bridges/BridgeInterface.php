<?php

namespace PHPPM\Bridges;

use Interop\Http\Server\RequestHandlerInterface;

interface BridgeInterface extends RequestHandlerInterface
{
    /**
     * Bootstrap an application
     *
     * @param string|null $appBootstrap The environment your application will use to bootstrap (if any)
     * @param string $appenv
     * @param boolean $debug If debug is enabled
     */
    public function bootstrap($appBootstrap, $appenv, $debug, \Symfony\Component\Debug\BufferingLogger $logger);
}
