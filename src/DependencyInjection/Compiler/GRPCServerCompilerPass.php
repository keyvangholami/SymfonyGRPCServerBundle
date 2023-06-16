<?php

namespace KeyvanGholami\GRPCServerBundle\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class GRPCServerCompilerPass implements CompilerPassInterface
{
    public function process(ContainerBuilder $container)
    {
        // here you could modify services before they are being used
    }
}
