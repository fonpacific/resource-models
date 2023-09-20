<?php

declare(strict_types=1);

namespace WebDevelovers\ResourceModels\Rich\Behaviour;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/** @see StatusAwareInterface */
trait StatusTrait
{
    #[ORM\Column(type: Types::STRING, nullable: false)]
    protected string $status;

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(string $status): void
    {
        $this->status = $status;
    }
}
