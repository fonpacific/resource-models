<?php

declare(strict_types=1);

namespace WebDevelovers\ResourceModels\Basic\Behaviour;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/** @see StatusAwareInterface */
trait StatusTrait
{
    #[ORM\Column(type: Types::STRING, nullable: true)]
    protected string|null $status = null;

    public function getStatus(): string|null
    {
        return $this->status;
    }

    public function setStatus(string|null $status): void
    {
        $this->status = $status;
    }
}
