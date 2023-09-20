<?php

declare(strict_types=1);

namespace WebDevelovers\Resource\Model;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/** @see ColorAwareInterface */
trait ColorTrait
{
    #[ORM\Column(type: Types::STRING, nullable: true)]
    protected string|null $color = null;

    public function getColor(): string|null
    {
        return $this->color;
    }

    public function setColor(string|null $color): void
    {
        $this->color = $color;
    }
}
