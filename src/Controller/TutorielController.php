<?php

namespace App\Controller;

use App\Repository\TutorielRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Attribute\Route;

final class TutorielController extends AbstractController
{
    #[Route('/{slug}', name: 'app_tutoriel')]
    public function index(string $slug, TutorielRepository $tutorielRepository): Response
    {
        $tutoriel = $tutorielRepository->findOneBySlug($slug);

        if (!$tutoriel) {
            throw new NotFoundHttpException('Tutoriel introuvable');
        }

        if ($tutoriel->getContents()->isEmpty() && null == $tutoriel->getVideo()) {
            return $this->redirectToRoute('app_construction');
        }

        return $this->render('tutoriel/index.html.twig', [
            'tutoriel' => $tutoriel,
        ]);
    }
}
