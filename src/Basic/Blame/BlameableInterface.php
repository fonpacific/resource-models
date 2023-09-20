<?php

declare(strict_types=1);

namespace WebDevelovers\ResourceModels\Anemic\Blame;

use Symfony\Component\Security\Core\User\UserInterface;

interface BlameableInterface
{
    public function getCreatedBy(): UserInterface|null;

    public function setCreatedBy(UserInterface $user): void;

    public function getUpdatedBy(): UserInterface|null;

    public function setUpdatedBy(UserInterface $user): void;
}
