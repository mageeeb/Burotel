<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ParentGrandPController extends AbstractController
{
    #[Route('/parent/grand/p', name: 'app_parent_grand_p')]
    public function index(): Response
    {
        return $this->render('parent_grand_p/index.html.twig', [
            'controller_name' => 'ParentGrandPController',
        ]);
    }
}
