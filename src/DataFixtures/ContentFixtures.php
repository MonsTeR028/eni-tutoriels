<?php

namespace App\DataFixtures;

use App\Factory\ContentFactory;
use App\Factory\TutorielFactory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class ContentFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        $tutoriels = TutorielFactory::all();
        ContentFactory::createOne(['tutoriel' => $tutoriels[10], 'image' => '../assets/ajouterFavoris/pageAcceuil.png']);
    }

    public function getDependencies(): array
    {
        return [
            TutorielFixtures::class,
        ];
    }
}
