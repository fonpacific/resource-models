<?php

declare(strict_types=1);

namespace WebDevelovers\Resource\Model;

use DateTimeInterface;

interface ArchivableInterface
{
    public function getArchivedAt(): DateTimeInterface|null;

    public function archive(): void;

    public function restore(): void;
}
