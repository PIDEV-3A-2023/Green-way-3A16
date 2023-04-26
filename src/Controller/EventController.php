<?php

namespace App\Controller;

use App\Entity\Event;
use App\Form\Event1Type;
use App\Repository\EventRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Dompdf\Dompdf;
use Dompdf\Options;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Box\Spout\Writer\Common\Creator\WriterEntityFactory;
use Knp\Component\Pager\PaginatorInterface;

#[Route('/event')]
class EventController extends AbstractController
{
    #[Route('/', name: 'app_event_index', methods: ['GET'])]
    public function index(EventRepository $eventRepository): Response
    {
        return $this->render('event/index.html.twig', [
            'events' => $eventRepository->findAll(),
        ]);
    }
    #[Route('/sort-by-datedeb', name: 'app_event_sort_by_datedeb', methods: ['GET'])]

   
   public function sortByDatedeb(Request $request,PaginatorInterface $paginator,EventRepository $eventRepository): Response
   {    $query = $this->getDoctrine()->getRepository(Event::class)->createQueryBuilder('e');
    $query->orderBy('e.datedeb', 'ASC');

    $events = $paginator->paginate(
        $query->getQuery(),
        $request->query->getInt('page', 1),
        10 // number of items per page
    );
       // Query the database for events sorted by "datedeb" in ascending order

       // Render the sorted events in the Twig template
       return $this->render('event/admin.html.twig', [
           'events' => $events,
       ]);
   }
   #[Route('/sort-by-nom', name: 'app_event_sort_by_nom', methods: ['GET'])]

   
   public function sortByNom(Request $request,PaginatorInterface $paginator,EventRepository $eventRepository): Response
   {    $query = $this->getDoctrine()->getRepository(Event::class)->createQueryBuilder('e');
    $query->orderBy('e.nom', 'ASC');

    $events = $paginator->paginate(
        $query->getQuery(),
        $request->query->getInt('page', 1),
        10 // number of items per page
    );
       // Query the database for events sorted by "datedeb" in ascending order

       // Render the sorted events in the Twig template
       return $this->render('event/admin.html.twig', [
           'events' => $events,
       ]);
   }


    #[Route('/admin', name: 'app_event_admin', methods: ['GET'])]
    public function index2(Request $request,PaginatorInterface $paginator,EventRepository $eventRepository): Response
    {

        // Get the search term from the query string
    $searchTerm = $request->query->get('search');

    // Query the database for events that match the search term
    $query = $this->getDoctrine()->getRepository(Event::class)->createQueryBuilder('e');
    if ($searchTerm) {
        $query->where('e.nom LIKE :searchTerm')
        ->orWhere('e.datedeb LIKE :searchTerm')
        ->orWhere('e.datefin LIKE :searchTerm')
        ->setParameter('searchTerm', '%' . $searchTerm . '%');
            
    }
    $query->orderBy('e.id', 'DESC');

    // Use the KnpPaginatorBundle to paginate the query results
    $events = $paginator->paginate(
        $query->getQuery(),
        $request->query->getInt('page', 1),
        10 // number of items per page
    );

    // Render the events in the Twig template
    return $this->render('event/admin.html.twig', [
        'events' => $events,
    ]);
    }
        
    

    #[Route('/exel', name: 'app_event_exel', methods: ['GET'])]
   
    public function indexexel(EventRepository $eventRepository): Response
    {
        $events = $eventRepository->findAll();
    
        $path = 'C:\exel\events.xlsx';
        $writer = \Box\Spout\Writer\Common\Creator\WriterEntityFactory::createXLSXWriter();
        $writer->openToFile($path);
        $header = ['id', 'nom', 'datedeb', 'datefin', 'description', 'image'];
        $rowFromValues = WriterEntityFactory::createRowFromArray($header);
        $writer->addRow($rowFromValues);
        foreach ($events as $event) {
            $data = [
                'id' => $event->getId(),
                'nom' => $event->getNom(),
                'datedeb' => $event->getDatedeb() ? $event->getDatedeb()->format('Y-m-d H:i:s') : null,
                'datefin' => $event->getDatefin() ? $event->getDatefin()->format('Y-m-d H:i:s') : null,
                'description' => $event->getDescription(),
                'image' => $event->getImage()
            ];
            
          
            
            $rowFromValues = WriterEntityFactory::createRowFromArray($data);
            $writer->addRow($rowFromValues);
        }
        
        $writer->close();
        $this->addFlash('success', 'La feuille Excel est prête. Vérifiez ' . $path);
        return $this->redirectToRoute('app_event_admin', [], Response::HTTP_SEE_OTHER);
    }
    #[Route('/DownloadEvenementsData', name: 'DownloadEvenementsData', methods: ['GET'])]

    public function DownloadEvenementsData(EventRepository $repository)
    {
        $evenements=$repository->findAll();
        $options = new OptionsResolver();

        // On définit les options du PDF
        $pdfOptions = new Options();
        // Police par défaut
        $pdfOptions->set('defaultFont', 'Arial');
        $pdfOptions->setIsRemoteEnabled(true);

        // On instancie Dompdf
        $dompdf = new Dompdf($pdfOptions);
        $context = stream_context_create([
            'ssl' => [
                'verify_peer' => FALSE,
                'verify_peer_name' => FALSE,
                'allow_self_signed' => TRUE
            ]
        ]);
        $dompdf->setHttpContext($context);

        // On génère le html
        $html = $this->renderView('event/download.html.twig',
            ['evenements'=>$evenements ]);


        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();

        // On génère un nom de fichier
        $fichier = 'Tableau des Produits.pdf';

        // On envoie le PDF au navigateur
        $dompdf->stream($fichier, [
            'Attachment' => true
        ]);

        return new Response();
    }

    #[Route('/new', name: 'app_event_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EventRepository $eventRepository): Response
    {
        $event = new Event();
        $form = $this->createForm(Event1Type::class, $event);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $eventRepository->save($event, true);

            return $this->redirectToRoute('app_event_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('event/new.html.twig', [
            'event' => $event,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_event_show', methods: ['GET'])]
    public function show(Event $event): Response
    {
        return $this->render('event/show.html.twig', [
            'event' => $event,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_event_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Event $event, EventRepository $eventRepository): Response
    {
        $form = $this->createForm(Event1Type::class, $event);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $eventRepository->save($event, true);

            return $this->redirectToRoute('app_event_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('event/edit.html.twig', [
            'event' => $event,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_event_delete', methods: ['POST'])]
    public function delete(Request $request, Event $event, EventRepository $eventRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$event->getId(), $request->request->get('_token'))) {
            $eventRepository->remove($event, true);
        }

        return $this->redirectToRoute('app_event_index', [], Response::HTTP_SEE_OTHER);
    }
   

}
