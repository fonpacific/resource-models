<?php

declare(strict_types=1);

namespace WebDevelovers\Resource\Model;

use Doctrine\Common\Collections\Collection;

interface TranslatableInterface
{
    /** @return TranslatableInterface[] */
    public function getTranslations(): Collection;

    public function getTranslation(string|null $locale = null): TranslationInterface;

    public function hasTranslation(TranslationInterface $translation): bool;

    public function addTranslation(TranslationInterface $translation): void;

    public function removeTranslation(TranslationInterface $translation): void;

    public function setCurrentLocale(string $locale): void;

    public function setFallbackLocale(string $locale): void;
}
