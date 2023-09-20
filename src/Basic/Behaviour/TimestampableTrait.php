<?php

declare(strict_types=1);

namespace WebDevelovers\ResourceModels\Basic\Behaviour;

use DateTime;
use DateTimeInterface;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/** @see TimestampableInterface */
trait TimestampableTrait
{
    #[ORM\Column(type: Types::DATETIMETZ_MUTABLE, nullable: false)]
    protected DateTimeInterface|null $createdAt = null;

    #[ORM\Column(type: Types::DATETIMETZ_MUTABLE, nullable: false)]
    protected DateTimeInterface|null $updatedAt = null;

    public function getCreatedAt(): DateTimeInterface|null
    {
        return $this->createdAt;
    }

    public function setCreatedAt(DateTimeInterface|null $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    public function getUpdatedAt(): DateTimeInterface|null
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(DateTimeInterface|null $updatedAt): void
    {
        $this->updatedAt = $updatedAt;
    }

    #[ORM\PrePersist]
    public function updateCreationTimestamp(): void
    {
        if ($this->createdAt === null) {
            $this->createdAt = new DateTime();
        }

        $this->updatedAt = $this->createdAt;
    }

    #[ORM\PreUpdate]
    public function updateModificationTimestamp(): void
    {
        $this->updatedAt = new DateTime();
    }
}
