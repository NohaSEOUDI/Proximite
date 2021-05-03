<?php

namespace AppBundle\Controller;

namespace App\Controller;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use App\Entity\Pin;
use App\Entity\User;
use App\Repository\PinRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\ParameterBag;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use App\Entity\Fournisseur;
use App\Form\FournisseurType;
use App\Entity\TypeService;
use App\Form\GenreType;

use App\Form\ServiceType;
use App\Entity\Calendrier;
use App\Form\CalendrierType;
use App\Form\SearchByDayType;
use App\Form\SearchByIntervallType;
use App\Entity\Jour;
use App\Form\JourType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use App\Entity\Reservation;
use App\Form\ReservationType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\DateIntervalType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Controller\Environment;
use App\Repository\ReservationRepository;
use App\Repository\NotesRepository;
use App\Entity\Notes;
use Symfony\Component\Security\Guard\GuardAuthenticatorHandler;
use SymfonyCasts\Bundle\VerifyEmail\Exception\VerifyEmailExceptionInterface;
use App\Security\LoginFormAuthenticator;
use App\Security\EmailVerifier;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\Mime\Address;
use Symfony\Component\Mime\Email;
use Symfony\Component\Mailer\MailerInterface;
use App\Entity\Service;
use Symfony\Component\Form\FormTypeInterface;
class DefaultController extends AbstractController
{
   /**
     * @Route("/recherche", name="app_searche",methods={"Get","POST"})
     */
   /* public function indexAction(Request $request):  Response
    {//fonction de reserche de ville
       $manager = $this->getDoctrine()->getManager();
       $services= new Service();

         $form = $this->createForm(Service::class, $services);
         $form->handleRequest($request);

        $kw = $request->query->get('kw');//type de poste 
        $city=$request->query->get('city');
       
if($form->isSubmitted() && $form->isValid() ){
        if (!empty($kw)) {
            $query = $this->getDoctrine()
                ->getManager()
                ->createQuery("select u from App:User u
                 where u.post = :kw and u.city= :city
                ")
                ->setParameter('kw', "$kw")
                ->setParameter('city', "$city");
            $users = $query->getResult();
        } else {
            $query = $this->getDoctrine()
                ->getManager()
                ->getRepository(User::class);
            $users = $query->findAll();
        }
 }
        return $this->render('default/index.html.twig',[
            'form' => $form->createView() 
        ]);

        //return $this->render('default/index.html.twig', compact('users'));
    }*/
    /**
     * @Route("/recherche", name="homepage")
     */
    public function indexAction(Request $request)
    {

        $kw = $request->query->get('kw');//type de service 
        $city=$request->query->get('city');//ville 
        if (!empty($kw)) {
            $query = $this->getDoctrine()
                ->getManager()
                ->createQuery("select u from App:User u
                 where u.post = :kw and u.city= :city
                ")
                ->setParameter('kw', "$kw")
                ->setParameter('city', "$city");
            $users = $query->getResult();
        } else {
            $query = $this->getDoctrine()
                ->getManager()
                ->getRepository(User::class);
            $users = $query->findAll();
        }


        return $this->render('default/index.html.twig', compact('users'));
    }
}
