<?php

declare(strict_types=1);

namespace WebDevelovers\ResourceModels\Rich\Identification;

// phpcs:disable SlevomatCodingStandard.TypeHints.ReturnTypeHint.MissingNativeTypeHint
use Symfony\Component\Uid\Uuid;

interface UUIDIdentifiableInterface
{
    public function getId(): Uuid;
}
