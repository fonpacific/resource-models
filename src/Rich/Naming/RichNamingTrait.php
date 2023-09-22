<?php

declare(strict_types=1);

namespace WebDevelovers\ResourceModels\Rich\Naming;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use WebDevelovers\ResourceUtils\StringUtils;

/** @see RichNamingInterface */
trait RichNamingTrait
{
    public function __toString(): string
    {
        return $this->getName();
    }

    public function updateSlug(): void
    {
        $this->slug = StringUtils::slugify($this->name);
    }

    #[ORM\Column(type: Types::STRING, nullable: false)]
    protected string $name;

    #[ORM\Column(type: Types::STRING, nullable: false)]
    protected string $slug;

    public function setName(string $name): void
    {
        $this->name = $name;
        $this->updateSlug();
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSlug(): string
    {
        return $this->slug;
    }
}
