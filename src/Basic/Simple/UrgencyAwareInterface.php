<?php

declare(strict_types=1);

namespace WebDevelovers\Resource\Model;

interface UrgencyAwareInterface
{
    public function getUrgency(): int|null;

    public function setUrgency(int|null $urgency): void;
}
