<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
   // #[Route('/front', name: 'app_product')]
    // public function index(): Response
    // {
    //     return $this->render('shop.html.twig', [
    //         'controller_name' => 'ProductController',
    //     ]);
    // }
    
    #[Route('/front', name: 'app_prod_index', methods: ['GET'])]
    public function index(ProductRepository $productRepository): Response
    {
        return $this->render('prod/indexfront.html.twig', [
            'products' => $productRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_prod_new', methods: ['GET', 'POST'])]
    public function new(Request $request, ProductRepository $productRepository): Response
    {
        $product = new Product();
        $form = $this->createForm(Product1Type::class, $product);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $productRepository->save($product, true);

            return $this->redirectToRoute('app_prod_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('prod/new.html.twig', [
            'product' => $product,
            'form' => $form,
        ]);
    }

    #[Route('/{id_Product}', name: 'app_prod_show', methods: ['GET'])]
    public function show(Product $product): Response
    {
        return $this->render('prod/show.html.twig', [
            'product' => $product,
        ]);
    }

    #[Route('/{id_Product}/edit', name: 'app_prod_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Product $product, ProductRepository $productRepository): Response
    {
        $form = $this->createForm(Product1Type::class, $product);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $productRepository->save($product, true);

            return $this->redirectToRoute('app_prod_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('prod/edit.html.twig', [
            'product' => $product,
            'form' => $form,
        ]);
    }

    #[Route('/{idProduct}', name: 'app_prod_delete', methods: ['POST'])]
    public function delete(Request $request, Product $product, ProductRepository $productRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$product->getIdProduct(), $request->request->get('_token'))) {
            $productRepository->remove($product, true);
        }

        return $this->redirectToRoute('app_prod_index', [], Response::HTTP_SEE_OTHER);
    }
}
