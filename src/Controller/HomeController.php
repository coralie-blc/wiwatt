<?php
namespace App\Controller;

use App\Form\ContactType;
use App\Repository\BookingRepository;
use App\Repository\VehicleRepository;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;



class HomeController extends AbstractController
{
    // Connexion inscription version Desktop
    /**
     * @Route("/", name="show_home")
     */
    
    public function home(VehicleRepository $vehicleRepository)
    {
        // injection de dépendance, permet d'éviter:
        // $lastVehicles = $this->getDoctrine()->getRepository(Vehicle::class)->getLastVehicles();
        $lastVehicles = $vehicleRepository->getLastVehicles();
            return $this->render('home/index.html.twig', [
            'lastVehicles' => $lastVehicles,
        ]);
    }
    
     /**
     * @Route("/marker/vehicule/all", name="all_vehicle_marker")
     */
    public function allMarker(VehicleRepository $vehicleRepository){
        $vehicles =  $vehicleRepository->findByAvailableDates(); 
        $markers = [];

        foreach($vehicles as $vehicle){
            $pictures = $vehicle->getPictures();

            if (count($pictures) > 0) {
                $picture = $pictures[0]->getImage();
            } else {
                $picture = 'plage.jpg';
            }

            $markers[] = [ 
                'latitude' => $vehicle->getLatitude() ,
                'longitude' => $vehicle->getLongitude(),
                'dayCost' => $vehicle->getDayCost(),
                'city' => $vehicle->getCity(),
                'zipCode' => $vehicle->getZipCode(),
                'id' => $vehicle->getId(),
                'picture' => $picture
            ];
        }
        return $this->json($markers); 
    }


     /**
     * @Route("/contact", name="contact")
     */
    public function contactUs(Request $request,\Swift_Mailer $mailer)
    {
        $form = $this->createForm(ContactType::class);
 
        $form->handleRequest($request);
        $data = $form->getData();
        
        $name = $data['fieldName'];
        $email = $data['email'];
        $about = $data['about'];
        $content = $data['content'];


        if ($form->isSubmitted() && $form->isValid()) {
            $message = (new \Swift_Message($about))
            ->setFrom($email)
            ->setTo("wiwattcontact@gmail.com")
            ->setBody(
                $this->renderView(                 
                    'emails/contact.html.twig',
                    ['email' => $email,
                    'name'    => $name,
                    'content'  => $content ]
                ),
                'text/html'
            );
            $mailer->send($message);

        dump($this->redirectToRoute('contact'));exit;
        $this->addFlash('success' , 'Votre message a été envoyé. Wiwatt vous répondra sous 48h.');
        return $this->redirectToRoute('contact');
        }

        return $this->render('home/contact.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/faq", name="faq_show")
     */
    public function faq()
    {
        return $this->render('home/faq.html.twig');
    }

    /**
     * @Route("/mentionslegales", name="mentionslegales_show")
     */
    public function mentions()
    {
        return $this->render('home/mentions_legales.html.twig');
    }

    /**
     * @Route("/notice-close-owner", name="closeNoticeOwner", methods={"POST"})
     */
    public function closeNoticeOwner(Request $request, ObjectManager $em, BookingRepository $bookingRepository)
    {
        $token = $request->request->get('token');
        $bookingId = $request->request->get('BookingId');
        $role = $request->request->get('role');

        if ($this->isCsrfTokenValid('close-notice', $token) ) {
            $booking = $bookingRepository->find($bookingId);

            if($role != $this->getUser() ){
                $booking->setNoticeOwnerStatus(0);
                $em->persist($booking);
                $em->flush();  
            }            
        };

        return $this->render('home/index.html.twig');
    }



    /**
     * @Route("/notice-close-renter", name="closeNoticeRenter", methods={"POST"})
     */
    public function closeNoticeRenter(Request $request, ObjectManager $em, BookingRepository $bookingRepository)
    {
        $token = $request->request->get('token');
        $bookingId = $request->request->get('BookingId');
        $role = $request->request->get('role');

        if ($this->isCsrfTokenValid('close-notice', $token) ) {
            $booking = $bookingRepository->find($bookingId);

            if($role != $this->getUser() ){
                $booking->setNoticeRenterStatus(0);
                $em->persist($booking);
                $em->flush();
            }            
        };

        return $this->render('home/index.html.twig');
    }

    /**
     * @Route("/nouvelle-notification", name="isNewNotice" )
     */
    public function isNewMessage()
    {
        if ($this->getUser() == null ){
            return $this->json(false);
        }

        $user = $this->getUser();
        $bookingsOwner = $user->getOwnerBookings();
        $bookingsRenter = $user->getRenterBookings();

        foreach($bookingsOwner as $notice) {
            if ($notice->getNoticeOwnerStatus() == 1) {
                return $this->json(true);
                break;
            }
        }

        foreach($bookingsRenter as $notice) {
            if ($notice->getNoticeRenterStatus() == 1) {
                return $this->json(true);
                break;
            }
        }

        return $this->json(false);
    }


    // Connexion inscription version Desktop
    /**
     * @Route("/us", name="us_page")
     */
    public function us()
    {       
        return $this->render('home/us.html.twig');
    }

}
