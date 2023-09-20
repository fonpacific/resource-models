<?php

declare(strict_types=1);

namespace WebDevelovers\ResourceModels\Basic\Behaviour;

use DateTimeInterface;

interface ArchivableInterface
{
    public function getArchivedAt(): DateTimeInterface|null;

    public function archive(): void;

    public function restore(): void;
}
