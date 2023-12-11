<?php

declare(strict_types=1);

namespace WebDevelovers\ResourceModels\Basic\Behaviour;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/** @see SortablePositionInterface */
//TODO: replace GEDMO
trait SortablePositionTrait
{
    #[ORM\Column(type: Types::INTEGER)]
    protected int|null $position = null;

    public function getPosition(): int|null
    {
        return $this->position;
    }

    public function setPosition(int|null $position): void
    {
        $this->position = $position;
    }
}
