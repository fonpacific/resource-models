<?php

declare(strict_types=1);

namespace WebDevelovers\Resource\Model;

interface VersionInterface
{
    public function getVersioned(): VersionedInterface;

    public function setVersioned(VersionedInterface|null $versioned): void;

    public function getVersionNumber(): int;

    public function setVersionNumber(int $versionNumber): void;
}
