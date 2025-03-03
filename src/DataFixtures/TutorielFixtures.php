<?php

namespace App\DataFixtures;

use App\Factory\CategoryFactory;
use App\Factory\TutorielFactory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class TutorielFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        $categories = CategoryFactory::all();

        foreach ($categories as $category) {
            TutorielFactory::createMany(rand(2, 6), function () use ($category) {
                return ['category' => $category];
            });
        }
    }

    public function getDependencies(): array
    {
        return [
            CategoryFixtures::class,
        ];
    }
}
