<?php

namespace App\DataFixtures;

use App\Factory\CategoryFactory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CategoryFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $categories = ['Rechercher une recherche',
            'Consulter un livre',
            'Gérer ses favoris',
            'Gérer ses notes',
            'Gérer son compte'];
        foreach ($categories as $cat) {
            CategoryFactory::createOne(['name' => $cat]);
        }
    }
}
