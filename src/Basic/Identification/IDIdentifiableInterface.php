<?php

declare(strict_types=1);

namespace WebDevelovers\Resource\Model;

interface IDIdentifiableInterface
{
    public function getId(): int|null;
}
