<?php

namespace App\Controller;
use App\Entity\Product;
use App\Form\Product1Type;
use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;




class FrontController extends AbstractController
{
    #[Route('/front', name: 'app_front')]
    public function index(ProductRepository $productRepository): Response
    {
        return $this->render('prod/indexfront.html.twig', [
            'products' => $productRepository->findAll(),
        ]);
    }
}
