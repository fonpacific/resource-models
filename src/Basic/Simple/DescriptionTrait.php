<?php

declare(strict_types=1);

namespace WebDevelovers\Resource\Model;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/** @see DescriptionAwareInterface */
trait DescriptionTrait
{
    #[ORM\Column(type: Types::TEXT, nullable: true)]
    protected string|null $description = null;

    public function getDescription(): string|null
    {
        return $this->description;
    }

    public function setDescription(string|null $description): void
    {
        $this->description = $description;
    }
}
