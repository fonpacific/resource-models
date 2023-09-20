<?php

declare(strict_types=1);

namespace WebDevelovers\ResourceModels\Basic\Simple;

interface ColorAwareInterface
{
    public function getColor(): string|null;

    public function setColor(string|null $color): void;
}
