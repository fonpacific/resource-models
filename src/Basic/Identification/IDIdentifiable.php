<?php

declare(strict_types=1);

namespace WebDevelovers\Resource\Model;

use Doctrine\ORM\Mapping as ORM;

trait IDIdentifiable
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'AUTO')]
    #[ORM\Column(type: 'integer', nullable: false)]
    private int|null $id = null;

    public function getId(): int|null
    {
        return $this->id;
    }
}
