<?php

declare(strict_types=1);

namespace WebDevelovers\Resource\Model;

use Doctrine\Common\Collections\Collection;

interface VersionedInterface
{
    /** @return VersionInterface[] */
    public function getVersions(): Collection;

    public function getVersion(int $version): VersionInterface;

    public function hasVersion(VersionInterface $entity): bool;

    public function addVersion(VersionInterface $entity): void;

    public function removeVersion(VersionInterface $entity): void;

    public function getCurrentVersion(): VersionInterface;

    public function setCurrentVersion(VersionInterface $version): void;
}
