<?php

declare(strict_types=1);

namespace WebDevelovers\Resource\Model;

/**
 * Dedicated to handle positioning/re-ordering of a list
 * by GedmoSortable
 */
interface SortablePositionInterface
{
    public function getPosition(): int|null;

    public function setPosition(int|null $position): void;
}
