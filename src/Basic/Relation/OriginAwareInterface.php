<?php

declare(strict_types=1);

namespace WebDevelovers\ResourceModels\Basic\Relation;

/**
 * Represents the "ultimate" origin of a record.In an ERP system where an action on a record triggers side effects,
 * like generating new documents, in the new documents this field should be set as the "name-identifier-number-label"
 * of the document that triggered its generation
 */
interface OriginAwareInterface
{
    public function getOrigin(): string|null;

    public function setOrigin(string|null $origin): void;
}
