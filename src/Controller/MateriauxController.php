<?php

namespace App\Controller;

use App\Form\YourFormType;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Materiaux;
use App\Form\MateriauxType;
use DateTime;
use Dompdf\Dompdf;
use Dompdf\Options;
use App\Repository\MateriauxRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use App\Services\QrcodeService;
use Doctrine\Persistence\ManagerRegistry;



#[Route('/materiaux')]
class MateriauxController extends AbstractController
{
   /**
 * @Route("/", name="app_materiaux_index", methods={"GET"})
 */
public function index(Request $request, MateriauxRepository $materiauxRepository): Response
{
    $types = $materiauxRepository->getTypes();

    if ($request->query->get('type')) {
        $materiauxes = $materiauxRepository->searchByType($request->query->get('type'));
    } else {
        $materiauxes = $materiauxRepository->findAll();
    }

    return $this->render('materiaux/index.html.twig', [
        'materiauxes' => $materiauxes,
        'types' => $types,
    ]);
}

/**
     * @Route("/new", name="ajouter_materiaux")
     * @param Request $request
     * @param QrcodeService $qrcodeService
     * @return Response
     */
    public function new(Request $request, MateriauxRepository $materiauxRepository, QrcodeService $qrcodeService): Response
{
    $qrCode = null;
    $materiaux = new Materiaux();
    $form = $this->createForm(MateriauxType::class, $materiaux);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $action = $request->request->get('action');

        if ($action === 'recherche') {
            // "Recherche"
            $name = $form->get('name')->getData();
            $qrCode = $qrcodeService->qrcode($name); 
        } else if ($action === 'create') {
        $type = $form->get('type')->getData();
        $date = $form->get('Date')->getData();
        $poids = $form->get('poids')->getData();
        
        $duration = null;
        $taux = null;

        switch ($type) {
            case 'Plastique':
                $duration = date_add($date, date_interval_create_from_date_string('1 year'));
                $taux = $poids * 0.3;
                break;
            case 'Metal':
                $duration = date_add($date, date_interval_create_from_date_string('10 year'));
                $taux = $poids * 0.5;
                break;
            case 'verre':
                $duration = date_add($date, date_interval_create_from_date_string('15 year'));
                $taux = $poids * 0.9;
                break;
                case 'coton':
                    $duration = date_add($date, date_interval_create_from_date_string('8 year'));
                    $taux = $poids * 0.2;
                    break;    
        }

        if ($duration !== null) {
            $duree = $duration->format('Y-m-d'); 
            $materiaux->setDuree($duree); 
        }
        if ($taux !== null) {
            $materiaux->setTaux($taux); 
        }

        $materiauxRepository->save($materiaux, true);

        return $this->redirectToRoute('app_materiaux_index', [], Response::HTTP_SEE_OTHER);
    }}

    return $this->renderForm('materiaux/new.html.twig', [
        'materiaux' => $materiaux,
        'form' => $form,
        'qrCode' => $qrCode,
    ]);
    }

    /**

      *@Route("/statistics", name="app_materiaux_statistics", methods={"GET"})
     */
      public function statistics(MateriauxRepository $materiauxRepository): Response
{
$statistics = $materiauxRepository->getStatisticsByType();

return $this->render('materiaux/statistics.html.twig', ['statistics' => $statistics,]);
}

#[Route('/{idmateriaux}', name: 'app_materiaux_show', methods: ['GET'])]
public function show(Materiaux $materiaux = null): Response
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
    #[Route('/listp',name:'listp')]
      public function listp(ManagerRegistry $doctrine){
        // Configure Dompdf according to your needs
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');
        
        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);
        $liste=$doctrine->getRepository(Materiaux::class)->findAll();
        
        
        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('materiaux/listp.html.twig',['liste'=>$liste]);
        
        // Load HTML to Dompdf
        $dompdf->loadHtml($html);
        
        
        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
        $dompdf->setPaper('A4', 'portrait');
        
        // Render the HTML as PDF
        $dompdf->render();
        // Output the generated PDF to Browser (inline view)
        $output = $dompdf->output();
        return new Response($output, 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="mypdf.pdf"'
        ]);
      }
   

}