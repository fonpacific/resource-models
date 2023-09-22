<?php

declare(strict_types=1);

namespace WebDevelovers\ResourceModels\Basic\Behaviour;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use RuntimeException;

trait TranslationTrait
{
    /** @var TranslatableInterface|null protected ?TranslatableInterface $translatable = null; in future doctrine event listener on schema */

    #[ORM\Column(type: Types::STRING, nullable: false)]
    protected string|null $locale = null;

    public function getTranslatable(): TranslatableInterface
    {
        $translatable = $this->translatable;
        if ($this->translatable === null) {
            throw new RuntimeException('expected translatable different from null.');
        }

        return $translatable;
    }

    public function setTranslatable(TranslatableInterface|null $translatable): void
    {
        if ($translatable === $this->translatable) {
            return;
        }

        $previousTranslatable = $this->translatable;
        $this->translatable = $translatable;

        if ($previousTranslatable !== null) {
            $previousTranslatable->removeTranslation($this);
        }

        if ($translatable === null) {
            return;
        }

        $translatable->addTranslation($this);
    }

    public function getLocale(): string|null
    {
        return $this->locale;
    }

    public function setLocale(string|null $locale): void
    {
        $this->locale = $locale;
    }
}
