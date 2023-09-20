<?php

declare(strict_types=1);

namespace WebDevelovers\ResourceModels\EventListener;

use Doctrine\Persistence\Event\LifecycleEventArgs;
use WebDevelovers\ResourceModels\Rich\Behaviour\TimestampableInterface;

class TimestampableListener
{
    public function preUpdate(LifecycleEventArgs $args): void
    {
        $object = $args->getObject();
        if (! $object instanceof TimestampableInterface) {
            return;
        }

        $object->refreshUpdatedAtTimestamp();
    }
}
