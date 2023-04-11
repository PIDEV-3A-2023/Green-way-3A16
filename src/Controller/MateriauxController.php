<?php

namespace App\Controller;

use App\Form\YourFormType;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Materiaux;
use App\Form\MateriauxType;
use DateTime;
use App\Repository\MateriauxRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;

#[Route('/materiaux')]
class MateriauxController extends AbstractController
{
    #[Route('/', name: 'app_materiaux_index', methods: ['GET'])]
    public function index(MateriauxRepository $materiauxRepository): Response
    {
        return $this->render('materiaux/index.html.twig', [
            'materiauxes' => $materiauxRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_materiaux_new', methods: ['GET', 'POST'])]
    public function new(Request $request, MateriauxRepository $materiauxRepository): Response
    {
        $materiaux = new Materiaux();
        $form = $this->createForm(MateriauxType::class, $materiaux);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            $materiauxRepository->save($materiaux, true);
    
            return $this->redirectToRoute('app_materiaux_index', [], Response::HTTP_SEE_OTHER);
        }
    
        return $this->renderForm('materiaux/new.html.twig', [
            'materiaux' => $materiaux,
            'form' => $form,
        ]);
    }
    #[Route('/{idmateriaux}', name: 'app_materiaux_show', methods: ['GET'])]
    public function show(Materiaux $materiaux): Response
    {
        return $this->render('materiaux/show.html.twig', [
            'materiaux' => $materiaux,
        ]);
    }

    #[Route('/{idmateriaux}/edit', name: 'app_materiaux_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Materiaux $materiaux, MateriauxRepository $materiauxRepository): Response
    {
        $form = $this->createForm(MateriauxType::class, $materiaux);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $materiauxRepository->save($materiaux, true);

            return $this->redirectToRoute('app_materiaux_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('materiaux/edit.html.twig', [
            'materiaux' => $materiaux,
            'form' => $form,
        ]);
    }

    #[Route('/{idmateriaux}', name: 'app_materiaux_delete', methods: ['POST'])]
    public function delete(Request $request, Materiaux $materiaux, MateriauxRepository $materiauxRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$materiaux->getIdmateriaux(), $request->request->get('_token'))) {
            $materiauxRepository->remove($materiaux, true);
        }

        return $this->redirectToRoute('app_materiaux_index', [], Response::HTTP_SEE_OTHER);
    }
    public function addMaterial(Request $request): Response
{
    $material = new Material();

    $form = $this->createForm(MaterialType::class, $material);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $type = $form->get('type')->getData();
        if ($type === 'metal') {
            $duree = new \DateTime('+10 years');
        } else if ($type === 'plastic') {
            $duree = new \DateTime('+5 years');
        } else {
            $duree = new \DateTime('+1 year');
        }
        $material->setDuree($duree);

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($material);
        $entityManager->flush();
}

}

}