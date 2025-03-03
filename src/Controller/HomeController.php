<?php

namespace App\Controller;

use App\Repository\CategoryRepository;
use App\Repository\TutorielRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(CategoryRepository $categoryRepository, TutorielRepository $tutorielRepository): Response
    {
        return $this->render('home/index.html.twig', [
            'categories' => $categoryRepository->findAll(),
            'tutoriels' => $tutorielRepository->findAll(),
        ]);
    }
}