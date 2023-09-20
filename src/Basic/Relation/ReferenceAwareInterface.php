<?php

declare(strict_types=1);

namespace WebDevelovers\Resource\Model;

/**
 * Represents the "context" of a "sub record". In an ERP system where a record has many "sub records",
 * this should be set as a reference to the parent record: in an OrderLine it should be set as the
 * name-identifier-number-label of the Order as a label
 */
interface ReferenceAwareInterface
{
    public function getReference(): string|null;

    public function setReference(string|null $reference): void;
}
