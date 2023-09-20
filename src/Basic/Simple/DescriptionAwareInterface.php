<?php

declare(strict_types=1);

namespace WebDevelovers\Resource\Model;

interface DescriptionAwareInterface
{
    public function getDescription(): string|null;

    public function setDescription(string|null $description): void;
}
