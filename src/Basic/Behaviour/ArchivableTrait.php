<?php

declare(strict_types=1);

namespace WebDevelovers\ResourceModels\Basic\Behaviour;

use DateTime;
use DateTimeInterface;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use WebDevelovers\Resource\RichModel\ToggleableInterface;

/** @see ArchivableInterface */
trait ArchivableTrait
{
    #[ORM\Column(type: Types::DATETIMETZ_MUTABLE, nullable: true)]
    protected DateTimeInterface|null $archivedAt = null;

    public function getArchivedAt(): DateTimeInterface|null
    {
        return $this->archivedAt;
    }

    public function archive(): void
    {
        $this->archivedAt = new DateTime();
        if (! ($this instanceof ToggleableInterface)) {
            return;
        }

        $this->disable();
    }

    public function restore(): void
    {
        $this->archivedAt = null;
        if (! ($this instanceof ToggleableInterface)) {
            return;
        }

        $this->enable();
    }
}
