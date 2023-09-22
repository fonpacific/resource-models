<?php

declare(strict_types=1);

namespace WebDevelovers\ResourceModels\Rich\Naming;

interface SlugAwareInterface
{
    public function getSlug(): string;
}
