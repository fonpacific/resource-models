<?php

namespace WebDevelovers\ResourceModels\Messenger;

use Symfony\Component\Uid\Uuid;

interface ResourceMessageInterface
{
    public function getResourceID(): Uuid;
    public function getResourceName(): string;
    public function getResourceAlias(): string;
}