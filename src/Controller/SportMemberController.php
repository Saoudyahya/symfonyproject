<?php

// src/Controller/MemberController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Member;

class SportMemberController extends AbstractController
{
    
    #[Route('/member', name: 'app_sport_member', methods: ['GET', 'POST'])]
    public function getMember(EntityManagerInterface $em): Response
    {
        $repository = $em->getRepository(Member::class);
        $members = $repository->findAll();
        return new Response( Response::HTTP_OK);
    }

}
