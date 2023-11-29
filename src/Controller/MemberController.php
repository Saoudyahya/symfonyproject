<?php

// src/Controller/MemberController.php
namespace App\Controller;

use App\Entity\Member;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MemberController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route('/member', name: 'app_member_controller', methods: 'GET')]
    public function index(): Response
    {
        $repository = $this->entityManager->getRepository(Member::class);
        $members = $repository->findAll();

        return $this->json($members);
    }
}


