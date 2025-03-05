<?php

namespace App\Controller;

use App\Entity\Tutoriel;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class TutorielController extends AbstractController
{
    #[Route('/{id}', name: 'app_tutoriel', requirements: ['id' => '\d+'])]
    public function index(Tutoriel $tutoriel): Response
    {
        return $this->render('tutoriel/index.html.twig', [
            'tutoriel' => $tutoriel,
        ]);
    }
}
