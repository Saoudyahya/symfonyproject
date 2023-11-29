<?php

namespace App\Controller;

use App\Entity\Reclamation;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ReclamationController extends AbstractController
{
    #[Route('/reclamation', name: 'app_reclamation',methods:'GET')]
    public function index(EntityManagerInterface $em): Response
    {

        $rep=$em->getRepository(Reclamation::class);
         $reclamations=$rep->findAll();
         return $this->json($reclamations);
    }
}
