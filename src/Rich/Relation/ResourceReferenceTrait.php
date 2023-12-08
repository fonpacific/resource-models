<?php

declare(strict_types=1);

namespace WebDevelovers\ResourceModels\Rich\Relation;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Uid\Uuid;

trait ResourceReferenceTrait
{
    #[ORM\Column(type: 'uuid', nullable: false)]
    protected Uuid $subject;

    #[ORM\Column(type: Types::STRING, nullable: false)]
    protected string $subjectName;

    #[ORM\Column(type: Types::STRING, nullable: false)]
    protected string $resourceAlias;

    public function getSubject(): Uuid
    {
        return $this->subject;
    }

    public function getSubjectName(): string
    {
        return $this->subjectName;
    }

    public function getResourceAlias(): string
    {
        return $this->resourceAlias;
    }
}
