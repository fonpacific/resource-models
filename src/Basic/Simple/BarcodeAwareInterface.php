<?php

declare(strict_types=1);

namespace WebDevelovers\Resource\Model;

interface BarcodeAwareInterface
{
    public function getBarcode(): string|null;

    public function setBarcode(string|null $barcode): void;
}
