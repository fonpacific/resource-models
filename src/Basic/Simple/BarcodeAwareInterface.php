<?php

declare(strict_types=1);

namespace WebDevelovers\ResourceModels\Basic\Simple;

interface BarcodeAwareInterface
{
    public function getBarcode(): string|null;

    public function setBarcode(string|null $barcode): void;
}
