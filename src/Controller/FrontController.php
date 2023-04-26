<?php

namespace App\Controller;
use App\Entity\Product;
use App\Form\Product1Type;
use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Component\Pager\Paginator;
use Knp\Component\Pager\PaginatorInterface;




class FrontController extends AbstractController
{
    #[Route('/front', name: 'app_front')]
    public function index(ProductRepository $productRepository ,PaginatorInterface $paginator, Request $request ): Response
    { $em = $this->getDoctrine()->getManager();
        
        // Get some repository of data, in our case we have an Appointments entity
        $appointmentsRepository = $em->getRepository(Product::class);
                
        // Find all the data on the Appointments table, filter your query as you need
        $allAppointmentsQuery = $productRepository->findall();
        
        // Paginate the results of the query
        $appointments = $paginator->paginate(
            // Doctrine Query, not results
            $allAppointmentsQuery,
            // Define the page parameter
            $request->query->getInt('page', 1),
            // Items per page
            2
        );
        return $this->render('prod/indexfront.html.twig', [
            
            'pagination' => $appointments,
            'products' => $productRepository->findAll(),
        ]);
    }
}

