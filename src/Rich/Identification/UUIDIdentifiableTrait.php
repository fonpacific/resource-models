<?php

declare(strict_types=1);

namespace WebDevelovers\ResourceModels\Rich\Identification;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Uid\Uuid;
use Symfony\Component\Uid\UuidV4;

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

    /**
     * @see \Sylius\Component\Resource\Model\ResourceInterface kept not typed to mantain compatibility
     *
     * @return Uuid|UuidV4
     *
     * @psalm-suppress MissingReturnType
     */
    public function getId()
    {
        return $this->id;
    }
}
