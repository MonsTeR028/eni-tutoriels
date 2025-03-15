<?php

namespace App\Factory;

use App\Entity\Tutoriel;
use Zenstruck\Foundry\Persistence\PersistentProxyObjectFactory;

/**
 * @extends PersistentProxyObjectFactory<Tutoriel>
 */
final class TutorielFactory extends PersistentProxyObjectFactory
{
    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#factories-as-services
     *
     * @todo inject services if required
     */
    public static function class(): string
    {
        return Tutoriel::class;
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#model-factories
     *
     * @todo add your default values here
     */
    protected function defaults(): array|callable
    {
        return [
            'name' => self::faker()->text(60),
        ];
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
     */
    protected function initialize(): static
    {
        return $this
            ->afterInstantiate(function (Tutoriel $tutoriel) {
                if (!$tutoriel->getSlug()) { // Si aucun slug n'est défini
                    $tutoriel->setSlug(self::generateSlug($tutoriel->getName()));
                }
            });
    }

    private static function generateSlug(string $name): string
    {
        return strtolower(trim(preg_replace(
            '/[^a-zA-Z0-9]+/',
            '-',
            transliterator_transliterate(
                'Any-Latin; Latin-ASCII',
                html_entity_decode(strip_tags($name), ENT_HTML5, 'UTF-8')
            )
        ), '-'));
    }
}
