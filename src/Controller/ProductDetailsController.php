<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use App\Repository\UserRepository;
use App\Controller\UserController;
#[Route('/product-details', name: 'app_product_details')]
class ProductDetailsController extends AbstractController
{
   
    public function index(SessionInterface $session): Response
{
    $user = $this->getUser();

    if ($user) {
        $user_id = $user->getId();
        $session->set('user_id', $user_id);
    } else {
        // handle the case where the user is not authenticated
        $user_id = null;
    }

    return $this->render('product-details.html.twig', [
        'controller_name' => 'ProductDetailsController',
        'user_id' => $user_id,
    ]);
}
public function viewProfile(User $user): Response
    {
        // Make sure the user is authorized to view this profile
        $this->denyAccessUnlessGranted('view', $user);

        return $this->render('profile/show.html.twig', [
            'user' => $user,
        ]);
    }
    
}
