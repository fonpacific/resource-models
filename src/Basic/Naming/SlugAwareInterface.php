<?php

declare(strict_types=1);

namespace WebDevelovers\ResourceModels\Basic\Naming;

interface SlugAwareInterface
{
    public function getSlug(): string|null;
}
