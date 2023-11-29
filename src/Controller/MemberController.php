<?php

namespace App\Controller;

use App\Entity\Member;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MemberController extends AbstractController
{
    #[Route('/member', name: 'app_member_controler',methods:'GET')]
    public function index(EntityManagerInterface $em): Response
    {
         $rep=$em->getRepository(Member::class);
         $member=$rep->findAll();

        return $this->json($member);
    }
}
