<?php

declare(strict_types=1);

namespace WebDevelovers\ResourceModels\Basic\Geo;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Embeddable]
class GeoCoordinates
{
    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 8, nullable: true)]
    private string|null $latitude = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 8, nullable: true)]
    private string|null $longitude = null;

    public function setLatitude(string|null $latitude): void
    {
        $this->latitude = $latitude;
    }

    public function getLatitude(): string|null
    {
        return $this->latitude;
    }

    public function setLongitude(string|null $longitude): void
    {
        $this->longitude = $longitude;
    }

    public function getLongitude(): string|null
    {
        return $this->longitude;
    }
}
