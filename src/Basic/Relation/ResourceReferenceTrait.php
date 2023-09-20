<?php

namespace WebDevelovers\ResourceModels\Basic\Relation;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Uid\Uuid;
use WebDevelovers\ResourceUtils\Reference\ResourceReference;

trait ResourceReferenceTrait
{
    #[ORM\Column(type: 'uuid', nullable: false)]
    protected Uuid $subjectId;

    #[ORM\Column(type: Types::STRING, nullable: false)]
    protected string $subjectName;

    #[ORM\Column(type: Types::STRING, nullable: false)]
    protected string $resourceName;

    public function setReference(ResourceReference $resourceReference): void
    {
        $this->subjectId = $resourceReference->subject;
        $this->subjectName = $resourceReference->subjectName;
        $this->resourceName = $resourceReference->resourceName;
    }

    public function getSubjectId(): Uuid
    {
        return $this->subjectId;
    }

    public function getSubjectName(): string
    {
        return $this->subjectName;
    }

    public function getResourceName(): string
    {
        return $this->resourceName;
    }
}

