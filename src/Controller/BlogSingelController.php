<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogSingelController extends AbstractController
{
    #[Route('/blog-single', name: 'app_blog_singel')]
    public function index(): Response
    {
        return $this->render('blog-single.html.twig', [
            'controller_name' => 'BlogSingelController',
        ]);
    }
}
