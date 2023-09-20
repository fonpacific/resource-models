<?php

declare(strict_types=1);

namespace WebDevelovers\ResourceModels\Basic\Simple;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/** @see BarcodeAwareInterface */
trait BarcodeTrait
{
    #[ORM\Column(type: Types::STRING, nullable: true)]
    protected string|null $barcode = null;

    public function getBarcode(): string|null
    {
        return $this->barcode;
    }

    public function setBarcode(string|null $barcode): void
    {
        $this->barcode = $barcode;
    }
}
