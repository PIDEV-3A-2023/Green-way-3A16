<?php

namespace App\Controller;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProfileController extends AbstractController
{

#[Route('/profile/{id}', name: 'profile_show')]
 
public function show($id): Response
{
    // Get the user with the given ID from the database
    $user = $this->getDoctrine()->getRepository(User::class)->find($id);

    // If the user doesn't exist, return a 404 error
    if (!$user) {
        throw $this->createNotFoundException('The user with id '.$id.' does not exist');
    }

    // Render the profile view template and pass the user object to it
    return $this->render('profile/show.html.twig', [
        'user' => $user,
    ]);
}

    


/**
 * @Route("/user/profile/{id}", name="app_user_profile")
 */
public function profile(User $user): Response
{
    // Make sure the user is authorized to view this profile
    $this->denyAccessUnlessGranted('view', $user);

    return $this->render('profile/show.html.twig', [
        'user' => $user,
    ]);
}




}
