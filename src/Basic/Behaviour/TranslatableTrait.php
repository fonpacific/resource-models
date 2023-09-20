<?php

declare(strict_types=1);

namespace WebDevelovers\ResourceModels\Basic\Behaviour;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\PersistentCollection;
use RuntimeException;

/** @see TranslatableInterface */
trait TranslatableTrait
{
    /** @var ArrayCollection|PersistentCollection|TranslationInterface[] */
    // protected Collection $translations; in future doctrine event listener on schema

    /** @var TranslationInterface[] */
    protected array $translationsCache = [];

    protected string|null $currentLocale = null;

    protected TranslationInterface|null $currentTranslation = null;

    protected string|null $fallbackLocale = null;

    /**
     * To use, eg:
     *   use TranslatableTrait { __construct as private initializeTranslations; }
     *
     * and in the constructor
     * "$this->initializeTranslations();"
     */
    public function __construct()
    {
        $this->translations = new ArrayCollection();
    }

    public function getTranslation(string|null $locale = null): TranslationInterface
    {
        $locale = $locale ?: $this->currentLocale;
        if ($locale === null) {
            throw new RuntimeException('No locale has been set and current locale is undefined.');
        }

        if (isset($this->translationsCache[$locale])) {
            return $this->translationsCache[$locale];
        }

        $translation = $this->translations->get($locale);
        if ($translation !== null) {
            $this->translationsCache[$locale] = $translation;

            return $translation;
        }

        if ($locale !== $this->fallbackLocale) {
            if (isset($this->translationsCache[$this->fallbackLocale])) {
                return $this->translationsCache[$this->fallbackLocale];
            }

            $fallbackTranslation = $this->translations->get($this->fallbackLocale);
            if ($fallbackTranslation !== null) {
                $this->translationsCache[$this->fallbackLocale] = $fallbackTranslation;

                return $fallbackTranslation;
            }
        }

        $translation = $this->createTranslation();
        $translation->setLocale($locale);

        $this->addTranslation($translation);

        $this->translationsCache[$locale] = $translation;

        return $translation;
    }

    /** @return Collection|TranslationInterface[] */
    public function getTranslations(): Collection
    {
        return $this->translations;
    }

    public function hasTranslation(TranslationInterface $translation): bool
    {
        return isset($this->translationsCache[$translation->getLocale()]) || $this->translations->containsKey($translation->getLocale());
    }

    public function addTranslation(TranslationInterface $translation): void
    {
        if ($this->hasTranslation($translation)) {
            return;
        }

        $this->translationsCache[$translation->getLocale()] = $translation;

        $this->translations->set($translation->getLocale(), $translation);
        $translation->setTranslatable($this);
    }

    public function removeTranslation(TranslationInterface $translation): void
    {
        if (! $this->translations->removeElement($translation)) {
            return;
        }

        unset($this->translationsCache[$translation->getLocale()]);

        $translation->setTranslatable(null);
    }

    public function setCurrentLocale(string $currentLocale): void
    {
        $this->currentLocale = $currentLocale;
    }

    public function setFallbackLocale(string $fallbackLocale): void
    {
        $this->fallbackLocale = $fallbackLocale;
    }

    /** Create resource translation model.*/
    abstract protected function createTranslation(): TranslationInterface;
}
