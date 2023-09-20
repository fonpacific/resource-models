<?php

declare(strict_types=1);

namespace WebDevelovers\ResourceModels\Basic\Behaviour;

interface StatusAwareInterface
{
    public function getStatus(): string|null;

    public function setStatus(string|null $status): void;
}
