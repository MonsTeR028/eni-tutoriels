<?php

namespace App\DataFixtures;

use App\Entity\Content;
use App\Factory\TutorielFactory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class TutorielFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        TutorielFactory::createMany(5);
    }

    public function getDependencies() : array
    {
        return [
            CategoryFixtures::class,
            ContentFixtures::class,
        ];
    }
}
