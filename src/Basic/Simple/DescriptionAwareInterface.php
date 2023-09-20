<?php

declare(strict_types=1);

namespace WebDevelovers\ResourceModels\Basic\Simple;

interface DescriptionAwareInterface
{
    public function getDescription(): string|null;

    public function setDescription(string|null $description): void;
}
