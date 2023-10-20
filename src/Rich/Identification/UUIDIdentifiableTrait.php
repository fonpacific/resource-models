<?php

declare(strict_types=1);

namespace WebDevelovers\ResourceModels\Rich\Identification;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Uid\Uuid;
use WebDevelovers\ResourceModels\ResourceInterface;

// phpcs:disable SlevomatCodingStandard.TypeHints.ReturnTypeHint.MissingNativeTypeHint
/** @see UUIDIdentifiableInterface */
trait UUIDIdentifiableTrait
{
    public function __construct()
    {
        $this->id = Uuid::v4();
    }

    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'NONE')]
    #[ORM\Column(type: 'uuid', nullable: false)]
    protected Uuid $id;

    /** @return Uuid */
    public function getId(): Uuid
    {
        return $this->id;
    }
}
