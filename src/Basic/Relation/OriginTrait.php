<?php

declare(strict_types=1);

namespace WebDevelovers\ResourceModels\Basic\Relation;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/** @see OriginAwareInterface */
trait OriginTrait
{
    #[ORM\Column(type: Types::STRING, nullable: true)]
    protected string|null $origin = null;

    public function getOrigin(): string|null
    {
        return $this->origin;
    }

    public function setOrigin(string|null $origin): void
    {
        $this->origin = $origin;
    }
}
