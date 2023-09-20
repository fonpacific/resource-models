<?php

declare(strict_types=1);

namespace WebDevelovers\ResourceModels\Basic\Simple;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/** @see UrgencyAwareInterface */
trait UrgencyTrait
{
    #[ORM\Column(type: Types::INTEGER, nullable: true)]
    protected int|null $urgency = null;

    public function getUrgency(): int|null
    {
        return $this->urgency;
    }

    public function setUrgency(int|null $urgency): void
    {
        $this->urgency = $urgency;
    }
}
