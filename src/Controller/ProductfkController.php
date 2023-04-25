<?php

namespace App\Controller;

use App\Entity\Product;
use App\Form\Product2Type;
use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/productfk')]
class ProductfkController extends AbstractController
{
    #[Route('/', name: 'app_productfk_index', methods: ['GET'])]
    public function index(ProductRepository $productRepository): Response
    {
        return $this->render('productfk/index.html.twig', [
            'products' => $productRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_productfk_new', methods: ['GET', 'POST'])]
    public function new(Request $request, ProductRepository $productRepository): Response
    {
        $product = new Product();
        $form = $this->createForm(Product2Type::class, $product);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $productRepository->save($product, true);

            return $this->redirectToRoute('app_productfk_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('productfk/new.html.twig', [
            'product' => $product,
            'form' => $form,
        ]);
    }

    #[Route('/{id_Product}', name: 'app_productfk_show', methods: ['GET'])]
    public function show(Product $product): Response
    {
        return $this->render('productfk/show.html.twig', [
            'product' => $product,
        ]);
    }

    #[Route('/{id_Product}/edit', name: 'app_productfk_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Product $product, ProductRepository $productRepository): Response
    {
        $form = $this->createForm(Product2Type::class, $product);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $productRepository->save($product, true);

            return $this->redirectToRoute('app_productfk_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('productfk/edit.html.twig', [
            'product' => $product,
            'form' => $form,
        ]);
    }

    #[Route('/{id_Product}', name: 'app_productfk_delete', methods: ['POST'])]
    public function delete(Request $request, Product $product, ProductRepository $productRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$product->getId_Product(), $request->request->get('_token'))) {
            $productRepository->remove($product, true);
        }

        return $this->redirectToRoute('app_productfk_index', [], Response::HTTP_SEE_OTHER);
    }
}
