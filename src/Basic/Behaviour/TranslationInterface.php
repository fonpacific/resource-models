<?php

declare(strict_types=1);

namespace WebDevelovers\ResourceModels\Basic\Behaviour;

interface TranslationInterface
{
    public function getTranslatable(): TranslatableInterface;

    public function setTranslatable(TranslatableInterface|null $translatable): void;

    public function getLocale(): string|null;

    public function setLocale(string|null $locale): void;
}
