<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SeparatioController extends AbstractController
{
    #[Route('/separatio', name: 'app_separatio')]
    public function index(): Response
    {
        return $this->render('separatio/index.html.twig', [
            'controller_name' => 'SeparatioController',
        ]);
    }
}
