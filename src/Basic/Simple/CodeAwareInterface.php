<?php

declare(strict_types=1);

namespace WebDevelovers\Resource\Model;

interface CodeAwareInterface
{
    public function getCode(): string|null;

    public function setCode(string|null $code): void;
}
