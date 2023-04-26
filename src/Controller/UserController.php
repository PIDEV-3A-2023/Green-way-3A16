<?php

namespace App\Controller;
use App\Form\LoginType;
use Dompdf\Dompdf;
use Dompdf\Options;
use App\Entity\User;
use App\Form\UserType;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Box\Spout\Writer\Common\Creator\WriterEntityFactory;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;

#[Route('/user')]
class UserController extends AbstractController
{
    

    #[Route('/', name: 'app_user_index', methods: ['GET'])]
    public function index(UserRepository $userRepository): Response
    {
        return $this->render('user/index.html.twig', [
            'users' => $userRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_user_new', methods: ['GET', 'POST'])]
    public function new(Request $request, UserRepository $userRepository): Response
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $userRepository->save($user, true);

        
        return $this->redirectToRoute('product-details', [], Response::HTTP_SEE_OTHER);
        }
        return $this->renderForm('user/new.html.twig', [
            'form' => $form,
        ]);
    }


    #[Route('/{id}', name: 'app_user_show', methods: ['GET'])]
    public function show(User $user): Response
    {
        return $this->render('user/show.html.twig', [
            'user' => $user,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_user_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, User $user, UserRepository $userRepository): Response
    {
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $userRepository->save($user, true);

            return $this->redirectToRoute('app_user_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('user/edit.html.twig', [
            'user' => $user,
            'form' => $form,
        ]);
    }
    /**
     * @Route("/login", name="app_login")
     */

    #[Route('/{id}', name: 'app_user_delete', methods: ['POST'])]
    public function delete(Request $request, User $user, UserRepository $userRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$user->getId(), $request->request->get('_token'))) {
            $userRepository->remove($user, true);
        }

        return $this->redirectToRoute('app_user_index', [], Response::HTTP_SEE_OTHER);
    }
    public function login(Request $request, AuthenticationUtils $authenticationUtils, UserRepository $userRepository, SessionInterface $session): Response
{
    // if the user is already logged in, redirect them to the homepage
    if ($this->getUser()) {
        return $this->redirectToRoute('product-details');
    }

    $loginForm = $this->createForm(LoginType::class);

    $loginForm->handleRequest($request);

    if ($loginForm->isSubmitted() && $loginForm->isValid()) {
    // Process form data
    // ...

    // Redirect to Inscription page
    $user = $userRepository->findOneBy(['email' => $loginForm->get('email')->getData()]);

    if ($user) {
        // Check if user ID is equal to 1
        if($user->getId() == 1){
            // Redirect to user page
            return $this->redirectToRoute('Admin');
        } if($user->getId() != 1) {
            // Redirect to Inscription page passing the user ID
            return $this->redirectToRoute('product-details', ['id' => $user->getId()]);
        }
    } else {
        // add a flash message to notify the user that no matching user was found
        $this->addFlash('error', 'No user found with the provided email address.');
    }
}


    // get the login error if there is one
    $error = $authenticationUtils->getLastAuthenticationError();

    // last username entered by the user
    $lastUsername = $authenticationUtils->getLastUsername();

    return $this->render('security/login.html.twig', [
        'login_form' => $loginForm->createView(),
        'error' => $error,
    ]);



}
#[Route('/user_profile', name: 'app_user_profile')]
public function profile(UserRepository $userRepository): Response
{
    // get the current user
    $user = $this->getUser();

    if (!$user) {
        // If the user is not logged in, redirect to the login page
        return $this->redirectToRoute('app_login');
    }

    return $this->render('Profile/show.html.twig', [
        'user' => $user,
    ]);
}
    
#[Route("/pdf/{id}", name: "pdf", methods: ['GET'])]
public function pdf($id, UserRepository $userRepository): Response
{
    $user = $userRepository->find($id);
    $pdfOptions = new Options();
    $pdfOptions->set('defaultFont', 'Arial');
    $dompdf = new Dompdf($pdfOptions);
    $html = $this->renderView('user/pdf.html.twig', [
        'pdf' => $user,
    ]);
    $dompdf->loadHtml($html);
    $dompdf->setPaper('B5', 'portrait');
    $dompdf->render();
    $pdfOutput = $dompdf->output();
    return new Response($pdfOutput, 200, [
        'Content-Type' => 'application/pdf',
        'Content-Disposition' => 'attachment; filename="user.pdf"'
    ]);
}


#[Route('/password-reset', name: 'app_password_reset', methods: ['GET','SET'])]
public function passwordReset(Request $request, UserRepository $userRepository): Response
{
    $form = $this->createFormBuilder()
        ->add('email', EmailType::class)
        ->add('telephone', TextType::class)
        ->add('submit', SubmitType::class, ['label' => 'Reset Password'])
        ->getForm();

    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $data = $form->getData();
        $user = $userRepository->findOneBy(['email' => $data['email'], 'telephone' => $data['telephone']]);

        if ($user) {
            // Generate a new password
            $password = bin2hex(random_bytes(6));
            $user->setPassword(password_hash($password, PASSWORD_DEFAULT));

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();

            $this->addFlash('success', 'A new password has been generated and saved. Your new password is: ' . $password);

            return $this->redirectToRoute('login'); 
        } else {
            $this->addFlash('error', 'Invalid email or telephone number.');
        }
    }

    return $this->render('email/password_reset.html.twig', [
        'form' => $form->createView(),
        'newPassword' => $password,
    ]);
}
    #[Route('/user/exel', name: 'app_user_exel', methods: ['GET'])]
    public function indexexel(UserRepository $userRepository): Response
    {
        $users = $userRepository->findAll();
    
        $path = 'C:\exel\users.xlsx';
        $writer = \Box\Spout\Writer\Common\Creator\WriterEntityFactory::createXLSXWriter();
        $writer->openToFile($path);
        $header = ['id', 'nom', 'prenom', 'email', 'telephone'];
        $rowFromValues = WriterEntityFactory::createRowFromArray($header);
        $writer->addRow($rowFromValues);
        foreach ($users as $row) {
            $user = [
                'id' => $row->getId(),  
                'nom' => $row->getNom(),
                'prenom' => $row->getPrenom(),
                'email' => $row->getEmail(),
                'telephone' => $row->getTelephone()
            ];
    
            $rowFromValues = WriterEntityFactory::createRowFromArray($user);
            $writer->addRow($rowFromValues);
        }
        $writer->close();
        $this->addFlash('success', 'Excel sheet is ready check ' . $path);
        return $this->redirectToRoute('app_user_index', [], Response::HTTP_SEE_OTHER);
    
    }

    #[Route('/user/search', name: 'app_user_search')]
    public function search(UserRepository $userRepository, Request $request): Response
    {
        $query = $request->get('query');
        $searchType = $request->get('searchType');
    
        if ($searchType === 'name') {
            $users = $userRepository->findBy(['nom' => $query]);
        } elseif ($searchType === 'email') {
            $users = $userRepository->findByEmail($query);
        } else {
            $users = [];
        }
        
        return $this->render('user/index.html.twig', [      
            'users' => $users,
        ]);
    }
    


}    
