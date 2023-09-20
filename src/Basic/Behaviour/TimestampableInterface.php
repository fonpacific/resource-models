<?php

declare(strict_types=1);

namespace WebDevelovers\Resource\Model;

use DateTimeInterface;

interface TimestampableInterface
{
    public function getCreatedAt(): DateTimeInterface|null;

    public function setCreatedAt(DateTimeInterface|null $createdAt): void;

    public function getUpdatedAt(): DateTimeInterface|null;

    public function setUpdatedAt(DateTimeInterface|null $updatedAt): void;
}
