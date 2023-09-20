<?php

declare(strict_types=1);

namespace WebDevelovers\ResourceModels\Rich\Naming;

interface NameAwareInterface
{
    public function getName(): string;

    public function setName(string $name): void;
}
