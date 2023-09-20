<?php

declare(strict_types=1);

namespace WebDevelovers\ResourceModels\Rich\EventListener;

use Doctrine\Persistence\Event\LifecycleEventArgs;
use WebDevelovers\Resource\RichModel\TimestampableInterface;

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
