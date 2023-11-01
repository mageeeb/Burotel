<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FratrieController extends AbstractController
{
    #[Route('/fratrie', name: 'app_fratrie')]
    public function index(): Response
    {
        return $this->render('fratrie/index.html.twig', [
            'controller_name' => 'FratrieController',
        ]);
    }
}
