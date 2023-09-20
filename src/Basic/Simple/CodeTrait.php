<?php

declare(strict_types=1);

namespace WebDevelovers\Resource\Model;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/** @see CodeAwareInterface */
trait CodeTrait
{
    #[ORM\Column(type: Types::STRING, nullable: true)]
    protected string|null $code = null;

    public function getCode(): string|null
    {
        return $this->code;
    }

    public function setCode(string|null $code): void
    {
        $this->code = $code;
    }
}
