<?php

declare(strict_types=1);

namespace DomainEngine\Library\Workflow\Process;

use DomainEngine\Library\Workflow\Orchestrator;

/**
 * “The process manager listens for messages indicating completion of work,
 * updates its state, and issues commands to other components to perform next steps.”
 */
abstract class ProcessManager extends Orchestrator
{
    abstract protected function end(): void;
}