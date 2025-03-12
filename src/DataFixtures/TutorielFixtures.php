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

        // Tutoriels pour "Rechercher un ouvrage"
        TutorielFactory::createOne(['category' => $categories[0], 'name' => 'Utilisation du champ de recherche']);
        TutorielFactory::createOne(['category' => $categories[0], 'name' => 'Trier et filtrer les résultats']);
        TutorielFactory::createOne(['category' => $categories[0], 'name' => 'Rechercher par catégorie']);

        // Tutoriels pour "Consulter un livre"
        TutorielFactory::createOne(['category' => $categories[1], 'name' => 'Rechercher un passage du livre']);
        TutorielFactory::createOne(['category' => $categories[1], 'name' => 'Afficher les informations du livre']);
        TutorielFactory::createOne(['category' => $categories[1], 'name' => 'Complément et bibliographie du livre']);
        TutorielFactory::createOne(['category' => $categories[1], 'name' => 'Mettre un marque-page']);
        TutorielFactory::createOne(['category' => $categories[1], 'name' => 'Masquer/Afficher le sommaire']);
        TutorielFactory::createOne(['category' => $categories[1], 'name' => 'Historique de consultation']);
        TutorielFactory::createOne(['category' => $categories[1], 'name' => 'Générer un PDF']);

        // Tutoriels pour "Gérer ses favoris"
        TutorielFactory::createOne(['category' => $categories[2], 'name' => 'Ajouter un livre à ses favoris']);
        TutorielFactory::createOne(['category' => $categories[2], 'name' => 'Consulter ses favoris']);

        // Tutoriels pour "Gérer ses notes"
        TutorielFactory::createOne(['category' => $categories[3], 'name' => 'Créer des notes']);
        TutorielFactory::createOne(['category' => $categories[3], 'name' => 'Consulter ses notes sur les ouvrages']);

        // Tutoriels pour "Gérer son compte"
        TutorielFactory::createOne(['category' => $categories[4], 'name' => 'Avatar']);
        TutorielFactory::createOne(['category' => $categories[4], 'name' => 'Objectif d\'apprentissage']);
        TutorielFactory::createOne(['category' => $categories[4], 'name' => 'Newsletter']);
        TutorielFactory::createOne(['category' => $categories[4], 'name' => 'Mode sombre']);
    }

    public function getDependencies(): array
    {
        return [
            CategoryFixtures::class,
        ];
    }
}
