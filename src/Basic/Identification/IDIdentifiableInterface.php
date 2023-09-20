<?php

declare(strict_types=1);

namespace WebDevelovers\ResourceModels\Basic\Identification;

interface IDIdentifiableInterface
{
    public function getId(): int|null;
}
