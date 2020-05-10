<?php

namespace App\Controller\User;

use App\Form\EditUserType;
use App\Service\FileUploadManager;
use App\Entity\User;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class AccountController extends AbstractController
{
    /**
     * @Route("/user/informations-personnelles/editer", name="user_information")
     */
    public function updatePersonalInformation(Request $request, FileUploadManager $fileUploadManager)
    {   
        $user = $this->getUser();
        $form = $this->createForm(EditUserType::class, $user);
        $form->handleRequest($request); 
         
        if ($form->isSubmitted() && $form->isValid()) {
            $imagePath = $fileUploadManager->upload($form['avatar'], $user->getId());
        
            if (!($user->getAvatar() !== null && $imagePath == null)) {
                $user->setAvatar($imagePath);
            }
        
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
        
            $this->addFlash(
                'info',
                'Les informations de votre profil ont été mises à jour.' 
            );
            
            return $this->redirectToRoute('user_information');
        }
       
        return $this->render('user/account/index.html.twig', [  
            'registerForm' => $form->createView(),
            'user' => $user
                    ]);
    }


    /**
     * @Route("/{user}/user/delete", methods={"POST"}, name="unsubscribe_ask") 
    */
    public function deleteUser(Request $request, ObjectManager $em, User $user)
    {
        $user = $this->getUser(); 
        $token = $request->request->get('token');
        if ($this->isCsrfTokenValid('delete-user', $token)){
        
            $em->remove($user);
            $em->flush();

            $this->addFlash('success', 'Votre compte a été supprimé.');
            return $this->redirectToRoute('app_logout');
        }

        $this->addFlash('danger', 'Une erreur est survenue.');
        return $this->redirectToRoute('user_information'); 
    } 

    /**
     * @Route("/user/{user}/info", name="one_user_information")
     */
     public function oneUserInformation(User $user){
        return $this->render('user/one_user.html.twig' , ['user' => $user ]);
    }
}
