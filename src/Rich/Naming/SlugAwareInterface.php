<?php

declare(strict_types=1);

namespace WebDevelovers\Resource\RichModel;

interface SlugAwareInterface
{
    public function getSlug(): string;
}
