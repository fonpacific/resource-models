<?php

declare(strict_types=1);

namespace WebDevelovers\Resource\RichModel;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/** @see ToggleableInterface */
trait ToggleableTrait
{
    #[ORM\Column(type: Types::BOOLEAN, nullable: false)]
    protected bool $enabled;

    public function isEnabled(): bool
    {
        return $this->enabled;
    }

    public function setEnabled(bool $enabled): void
    {
        $this->enabled = $enabled;
    }

    public function enable(): void
    {
        $this->enabled = true;
    }

    public function disable(): void
    {
        $this->enabled = false;
    }

    public function toggle(): void
    {
        $this->enabled = ! $this->enabled;
    }
}
