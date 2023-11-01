<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ParentAdoController extends AbstractController
{
    #[Route('/parent/ado', name: 'app_parent_ado')]
    public function index(): Response
    {
        return $this->render('parent_ado/index.html.twig', [
            'controller_name' => 'ParentAdoController',
        ]);
    }
}
