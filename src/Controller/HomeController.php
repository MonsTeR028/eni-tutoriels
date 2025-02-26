<?php

namespace App\Controller;

use App\Entity\Tutoriel;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        $categories = [
            'Ouvrages préférés et favoris',
            'Rechercher un ouvrage',
            'Consulter un ouvrage et actions associées'
        ];
        $tutoriels = [
            'Ajouter un livre à ses favoris',
            'Consulter ses ouvrages favoris'
        ];
        return $this->render('home/index.html.twig', [
            'categories' => $categories,
            'tutoriels' => $tutoriels,
        ]);
    }
}
