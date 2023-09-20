<?php

declare(strict_types=1);

namespace WebDevelovers\Resource\Model;

interface StatusAwareInterface
{
    public function getStatus(): string|null;

    public function setStatus(string|null $status): void;
}
