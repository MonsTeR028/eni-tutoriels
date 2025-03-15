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
        // Ajouter à ses favoris
        ContentFactory::createOne([
            'tutoriel' => $tutoriels[10],
            'image' => '../assets/ajouterFavoris/pageAccueil.png',
            'text' => 'Pour ajouter un livre à vos favoris, commencez par effectuer une recherche sur le site. Rendez-vous sur la barre de recherche en haut de la page et saisissez le titre du livre ou le nom de l’auteur. Une liste de résultats correspondant à votre recherche s’affichera. Parcourez cette liste et sélectionnez le livre que vous souhaitez ajouter à vos favoris.']);
        ContentFactory::createOne([
            'tutoriel' => $tutoriels[10],
            'image' => '../assets/ajouterFavoris/pageRésultatRecherche.png',
            'text' => 'Une fois votre livre trouvé, vous verrez une icône en forme de cœur. Cliquez dessus pour enregistrer le livre dans votre liste de favoris. Vous pourrez ainsi y accéder facilement plus tard depuis votre profil ou votre liste de favoris sur le site.']);

        // Consulter ses favoris
        ContentFactory::createOne([
            'tutoriel' => $tutoriels[11],
            'image' => '../assets/consulterFavoris/pageAccueil.png',
            'text' => 'Pour voir tous les livres que vous avez ajoutés en favoris, rendez-vous dans la section "Mes Favoris" de votre compte. Vous y trouverez la liste complète des livres enregistrés, que vous pourrez consulter à tout moment pour les relire ou obtenir plus d’informations.']);
        ContentFactory::createOne([
            'tutoriel' => $tutoriels[11],
            'image' => '../assets/consulterFavoris/pageFavoris.png',
            'text' => "Vous trouverez donc vos livres favoris, que vous pouvez consulter ou supprimer de vos favoris en cliquant sur l'icône en forme de cœur"]);

        // Consulter ses notes
        ContentFactory::createOne([
            'tutoriel' => $tutoriels[13],
            'image' => '../assets/consulterNotes/pageAccueil.png',
            'text' => 'Pour voir toutes les notes que vous avez écrites, rendez-vous dans la section "Mes Notes" de votre compte. Vous y trouverez la liste complète de vos notes.']);
        ContentFactory::createOne([
            'tutoriel' => $tutoriels[13],
            'image' => '../assets/consulterNotes/pageNotes.png',
            'text' => 'Vous trouverez donc vos notes, que vous pouvez consulter ou supprimer.']);

        // Modifier son avatar
        ContentFactory::createOne([
            'tutoriel' => $tutoriels[14],
            'image' => '../assets/gestionCompte/pageAccueilCompte.png',
            'text' => 'Pour modifier votre avatar, rendez-vous dans la section "Mon Compte", puis dans le menu déroulant sélectionnez "Mon profil et mes objectifs".']);
        ContentFactory::createOne([
            'tutoriel' => $tutoriels[14],
            'image' => '../assets/gestionCompte/pageComptePP.png',
            'text' => "Vous pourrez ensuite cliquer sur \"Choisir un avatar\" pour sélectionner un des avatars proposés par le site, ou cliquer sur \"Importer\" pour déposer votre propre image en guise d'avatar."]);

        // Modifier son objectif d'apprentissage
        ContentFactory::createOne([
            'tutoriel' => $tutoriels[15],
            'image' => '../assets/gestionCompte/pageAccueilCompte.png',
            'text' => "Pour modifier votre objectif d'apprentissage, rendez-vous dans la section \"Mon Compte\", puis dans le menu déroulant sélectionnez \"Mon profil et mes objectifs\"."]);
        ContentFactory::createOne([
            'tutoriel' => $tutoriels[15],
            'image' => '../assets/gestionCompte/pageCompteObjectif.png',
            'text' => "Vous pourrez ensuite utiliser le curseur pour sélectionner un nombre d'heure et en faire votre nombre d'heure cible par semaine."]);

        // Activer/désactiver la newsletter
        ContentFactory::createOne([
            'tutoriel' => $tutoriels[16],
            'image' => '../assets/gestionCompte/pageAccueilCompte.png',
            'text' => 'Pour activer ou désactiver la newsletter, rendez-vous dans la section "Mon Compte", puis dans le menu déroulant sélectionnez "Mon profil et mes objectifs".']);
        ContentFactory::createOne([
            'tutoriel' => $tutoriels[16],
            'image' => '../assets/gestionCompte/pageCompteNews.png',
            'text' => "Vous pourrez activer ou désactiver l'option pour recevoir régulièrement des mails concernant l'actualité du site ENI."]);

        // Activer/désactiver le mode sombre
        ContentFactory::createOne([
            'tutoriel' => $tutoriels[17],
            'image' => '../assets/gestionCompte/pageAccueilCompte.png',
            'text' => 'Pour activer ou désactiver le mode sombre, rendez-vous dans la section "Mon Compte", puis dans le menu déroulant sélectionnez "Mon profil et mes objectifs".']);
        ContentFactory::createOne([
            'tutoriel' => $tutoriels[17],
            'image' => '../assets/gestionCompte/pageCompteNews.png',
            'text' => "Vous pourrez cocher ou décocher l'option pour activer le mode sombre sur le site ENI."]);
    }

    public function getDependencies(): array
    {
        return [
            TutorielFixtures::class,
        ];
    }
}
