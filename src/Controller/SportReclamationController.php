<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SportReclamationController extends AbstractController
{
    #[Route('/sport/reclamation', name: 'app_sport_reclamation')]
    public function index(): Response
    {
        return $this->render('sport_reclamation/index.html.twig', [
            'controller_name' => 'SportReclamationController',
        ]);
    }
}
