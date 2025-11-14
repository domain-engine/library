<?php
declare(strict_types=1);

namespace DomainEngine\Library\Workflow;

use Attribute;

#[Attribute(Attribute::TARGET_METHOD)]
final readonly class Start
{
}