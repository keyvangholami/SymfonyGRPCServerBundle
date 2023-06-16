<?php

namespace KeyvanGholami\GRPCServerBundle\Command;

use OpenSwoole\GRPC\Server;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class GRPCServeCommand extends Command
{
    protected static $defaultName = 'grpc:serve';

    protected function configure()
    {
        $this->setDescription('Start the GRPC server.');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        co::set(['hook_flags' => \OpenSwoole\Runtime::HOOK_ALL]);

        $server = (new Server('127.0.0.1', 9501))
            ->register('Your GRPC service class here')
            ->withWorkerContext('worker_start_time', function () {
                return time();
            })
            ->set([
                'log_level' => \OpenSwoole\Constant::LOG_INFO,
            ])
            ->start();

        return Command::SUCCESS;
    }
}
