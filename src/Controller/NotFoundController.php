<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NotFoundController extends AbstractController
{
    #[Route('/notFound', name: 'app_not_found')]
    public function index(): Response
    {
        return $this->render('404.html.twig', [
            'controller_name' => 'NotFoundController',
        ]);
    }
}
