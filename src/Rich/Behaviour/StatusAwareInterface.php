<?php

declare(strict_types=1);

namespace WebDevelovers\Resource\RichModel;

interface StatusAwareInterface
{
    public function getStatus(): string;

    public function setStatus(string $status): void;
}
