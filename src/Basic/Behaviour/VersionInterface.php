<?php

declare(strict_types=1);

namespace WebDevelovers\ResourceModels\Basic\Behaviour;

interface VersionInterface
{
    public function getVersioned(): VersionedInterface;

    public function setVersioned(VersionedInterface|null $versioned): void;

    public function getVersionNumber(): int;

    public function setVersionNumber(int $versionNumber): void;
}
