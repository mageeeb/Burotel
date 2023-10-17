<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CoupleController extends AbstractController
{
    #[Route('/couple', name: 'app_couple')]
    public function index(): Response
    {
        return $this->render('couple/index.html.twig', [
            'controller_name' => 'CoupleController',
        ]);
    }
}
