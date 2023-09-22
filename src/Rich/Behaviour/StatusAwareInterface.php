<?php

declare(strict_types=1);

namespace WebDevelovers\ResourceModels\Rich\Behaviour;

interface StatusAwareInterface
{
    public function getStatus(): string;

    public function setStatus(string $status): void;
}
