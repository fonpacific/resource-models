<?php

declare(strict_types=1);

namespace WebDevelovers\Resource\RichModel;

use DateTimeInterface;

interface TimestampableInterface
{
    public function getCreatedAt(): DateTimeInterface|null;

    public function getUpdatedAt(): DateTimeInterface|null;

    public function refreshUpdatedAtTimestamp(): void;
}
