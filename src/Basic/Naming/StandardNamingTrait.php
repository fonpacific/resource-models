<?php

declare(strict_types=1);

namespace WebDevelovers\ResourceModels\Basic\Naming;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use WebDevelovers\ResourceUtils\StringUtils;

/** @see RichNamingInterface */
trait StandardNamingTrait
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
    protected string|null $name = null;

    #[ORM\Column(type: Types::STRING, nullable: false)]
    protected string|null $slug = null;

    public function setName(string|null $name): void
    {
        $this->name = $name;
        $this->updateSlug();
    }

    public function getName(): string
    {
        if ($this->name === null) {
            return '';
        }

        return $this->name;
    }

    public function getSlug(): string|null
    {
        return $this->slug;
    }
}
