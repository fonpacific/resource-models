<?php

declare(strict_types=1);

namespace WebDevelovers\Resource\RichModel;

interface NameAwareInterface
{
    public function getName(): string;

    public function setName(string $name): void;
}
