<?php

namespace App\Controller;

use App\Repository\TutorielRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class TutorielController extends AbstractController
{
    #[Route('/{slug}', name: 'app_tutoriel')]
    public function index(string $slug, TutorielRepository $tutorielRepository): Response
    {
        $tutoriel = $tutorielRepository->findOneBySlug($slug);

        return $this->render('tutoriel/index.html.twig', [
            'tutoriel' => $tutoriel,
        ]);
    }
}
