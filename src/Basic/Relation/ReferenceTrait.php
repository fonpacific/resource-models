<?php

declare(strict_types=1);

namespace WebDevelovers\Resource\Model;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/** @see ReferenceAwareInterface */
trait ReferenceTrait
{
    #[ORM\Column(type: Types::STRING, nullable: true)]
    protected string|null $reference = null;

    public function getReference(): string|null
    {
        return $this->reference;
    }

    public function setReference(string|null $reference): void
    {
        $this->reference = $reference;
    }
}
