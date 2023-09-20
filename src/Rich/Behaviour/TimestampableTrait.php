<?php

declare(strict_types=1);

namespace WebDevelovers\Resource\RichModel;

use Cake\Chronos\Chronos;
use DateTimeInterface;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/** @see TimestampableInterface */
trait TimestampableTrait
{
    public function __construct()
    {
        $this->createdAt = Chronos::now();
        $this->updatedAt = Chronos::now();
    }

    #[ORM\Column(type: Types::DATETIMETZ_MUTABLE, nullable: false)]
    protected DateTimeInterface $createdAt;

    #[ORM\Column(type: Types::DATETIMETZ_MUTABLE, nullable: false)]
    protected DateTimeInterface $updatedAt;

    public function getCreatedAt(): DateTimeInterface
    {
        return $this->createdAt;
    }

    public function getUpdatedAt(): DateTimeInterface|null
    {
        return $this->updatedAt;
    }

    public function refreshUpdatedAtTimestamp(): void
    {
        $this->updatedAt = Chronos::now();
    }
}
