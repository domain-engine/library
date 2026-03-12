<?php

declare(strict_types=1);

namespace DomainEngine\Library\Workflow;

use DomainEngine\Library\Application\Command;
use DomainEngine\Library\Application\IntegrationEvent;

abstract class Orchestrator
{
    abstract protected function publish(IntegrationEvent $event): void;

    abstract protected function send(Command $command): void;
}