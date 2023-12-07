<?php

declare(strict_types=1);

namespace WebDevelovers\ResourceModels;

use Symfony\Component\Uid\Uuid;

interface ResourceInterface
{
    public function getId(): Uuid;

    public function __toString(): string;
}
