<?php

declare(strict_types=1);

namespace WebDevelovers\ResourceModels\Basic\Naming;

interface NameAwareInterface
{
    public function getName(): string|null;

    public function setName(string|null $name): void;
}
