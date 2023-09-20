<?php

declare(strict_types=1);

namespace WebDevelovers\ResourceModels\Basic\Blame;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/** @see BlameableInterface */
trait BlameableTrait
{
    #[ORM\ManyToOne(targetEntity: UserInterface::class)]
    #[ORM\JoinColumn(name: 'created_by', nullable: false)]
    protected UserInterface|null $createdBy = null;

    #[ORM\ManyToOne(targetEntity: UserInterface::class)]
    #[ORM\JoinColumn(name: 'updated_by', nullable: false)]
    protected UserInterface|null $updatedBy = null;

    public function getCreatedBy(): UserInterface|null
    {
        return $this->createdBy;
    }

    public function setCreatedBy(UserInterface $createdBy): void
    {
        $this->createdBy = $createdBy;
    }

    public function getUpdatedBy(): UserInterface|null
    {
        return $this->updatedBy;
    }

    public function setUpdatedBy(UserInterface $updatedBy): void
    {
        $this->updatedBy = $updatedBy;
    }
}
