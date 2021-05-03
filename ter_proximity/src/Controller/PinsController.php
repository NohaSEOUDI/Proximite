<?php

namespace App\Controller;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
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
use App\Form\ProfileFournisseurType;
use App\Form\ConnexionFournisseurType;
use App\Entity\TypeService;
use App\Form\GenreType;
use App\Entity\Service;
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
use App\Form\RechercheType;
class PinsController extends AbstractController
{   private $em;

    

    /**
     * @Route("/indexFournisseur",name="app_index_fournisseur",methods={"Get","POST"})
     */
    public function indexFournisseur(Request $request): Response

    {	
        
        $fournisseur= new Fournisseur();
        
        $form = $this->createForm(ConnexionFournisseurType::class, $fournisseur);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid() ){
            $connexion=$request->get("connexion_fournisseur");
            
            $fs= $this->getDoctrine()
            ->getRepository(Fournisseur::class)
            ->findBy(
                array('email'=>$connexion["email"]));
            
            foreach($fs as $i){
                $f=$i;
            }
            if($f->getPassword()==$connexion["password"]){
                
                return $this->redirectToRoute('app_fullCalendar',['idFournisseur'=>$f->getId()]);
            }
            else{
                $this->addFlash('error', 'mot de passe erroné');
                return $this->render('fournisseur/indexFournisseur.html.twig',['form'=>$form->createView()]);
            }
        //     $manager->persist($type);
        //     $manager->flush();
        //    
        }
        
        return $this->render('fournisseur/indexFournisseur.html.twig',['form'=>$form->createView()]);
        
 
    }

    /**
     * @Route("/profile/{idF}",name="app_profile",methods={"Get","POST"})
     */
    public function profile(Request $request, $idF): Response
    {	
        $fournisseur = $this->getDoctrine()
            ->getRepository(Fournisseur::class)
            ->find($idF);
        $services = $this->getDoctrine()
            ->getRepository(Service::class)
            ->findBy(
                array('fournisseur'=>$fournisseur));
        foreach($services as $s){
            $service=$s;
        }
        return $this->render('fournisseur/profile.html.twig',[
            'fournisseur' => $fournisseur,
            'service'=>$service,
            'idF'=>$fournisseur->getId()
        ]);
    }


     /**
     * @Route("/modifieProfile/{idF}",name="app_modifier_profile",methods={"Get","POST"})
     */
    public function modifieProfile(Request $request, $idF): Response
    {	
        $manager = $this->getDoctrine()->getManager();
        $fournisseur = $this->getDoctrine()
            ->getRepository(Fournisseur::class)
            ->find($idF);
        $services = $this->getDoctrine()
            ->getRepository(Service::class)
            ->findBy(
                array('fournisseur'=>$fournisseur));
        foreach($services as $s){
            $service=$s;
        }
        $formFournisseur = $this->createForm(ProfileFournisseurType::class, $fournisseur);
        $formFournisseur->handleRequest($request);
        $formService = $this->createForm(ServiceType::class, $service);
        $formService->handleRequest($request);

        if($formFournisseur->isSubmitted() && $formFournisseur->isValid()){
            $manager->persist($fournisseur);
            $manager->flush();
            return $this->redirectToRoute('app_profile',['idF'  => $fournisseur->getId()]);
        }
     
        if($formService->isSubmitted()){
            $manager->persist($service);
            $manager->flush();
            return $this->redirectToRoute('app_profile',['idF'  => $fournisseur->getId()]);
        }
  
        return $this->render('fournisseur/modifierProfile.html.twig',[
            'fournisseur' => $formFournisseur->createView(),
            'service' => $formService->createView(),
            'idF'=>$fournisseur->getId()
        ]);

    }
    /**
     * @Route("/",name="app_home",methods={"Get","POST"})
     *
     */
    public function index(ReservationRepository $priseRdv): Response
    {   
       $Reservations= $priseRdv->findAll();
        return $this->render('pins/index.html.twig',compact('Reservations'));
      
    }
    
     /**
     * @Route("/app_login",name="app_login" ,methods="POST")
     */
    public function create(Request $request,EntityManagerInterface $em): Response{
        
        return $this->render('pins/create.html.twig');
    }

    /**
     * @Route("/inscription",name="app_pins_inscrit" ,methods={"Get","POST"})
     */
    public function inscrit(Request $request,EntityManagerInterface $em): Response{
     
        return $this->render('pins/inscription.html.twig');
    }

    /**
     * @Route("/pins/addfournisseur",name="app_add_fournisseur",methods={"Get","POST"})
     */
    public function addfournisseur(Request $request): Response
    {   
        $manager = $this->getDoctrine()->getManager();
        $fournisseur= new Fournisseur();

        $form = $this->createForm(FournisseurType::class, $fournisseur);
        $form->handleRequest($request);

         if ($this->getUser()) {
            $this->addFlash('error','Vous n\'avez pas le droit d\'accéder !');//car connecté en étant client
             return $this->redirectToRoute('app_rdv');
         }

        if($form->isSubmitted() && $form->isValid() ){
           // dump($request);
            
            $manager->persist($fournisseur);
            $manager->flush();
            return $this->redirectToRoute('app_add_type',['idFournisseur'  => $fournisseur->getId()]);
        }
        
        return $this->render('pins/addfournisseur.html.twig',[
            'formFournisseur' => $form->createView() 
        ]);
    }

    /**
     * @Route("/pins/addType/{idFournisseur}",name="app_add_type",methods={"Get","POST"})
     */
    public function addtype(Request $request, $idFournisseur): Response
    {   
        $manager = $this->getDoctrine()->getManager();
        $type= new TypeService();
        
        $form1 = $this->createForm(GenreType::class, $type);
        $form1->handleRequest($request);

        if($form1->isSubmitted() && $form1->isValid() ){
            $manager->persist($type);
            $manager->flush();
            return $this->redirectToRoute('app_add_service',['idFournisseur'=>$idFournisseur, 'idType'=>$type->getId()]);
        }

        return $this->render('pins/addType.html.twig',[
            'form' => $form1->createView() 
        ]);
    }
   


    /**
     * @Route("/pins/addService/{idFournisseur}/{idType}",name="app_add_service",methods={"Get","POST"})
     */
    public function addservice(Request $request,$idFournisseur,$idType): Response
    {   
        $manager = $this->getDoctrine()->getManager();
        $service= new Service();
        
        $form = $this->createForm(ServiceType::class, $service);
        $form->handleRequest($request);

        $fournisseur = $this->getDoctrine()
            ->getRepository(Fournisseur::class)
            ->find($idFournisseur);
        $type = $this->getDoctrine()
            ->getRepository(TypeService::class)
            ->find($idType);

        if($form->isSubmitted() && $form->isValid() ){
            $service->setFournisseur($fournisseur);
            $service->setType($type);
            $manager->persist($service);
            $manager->flush();
            return $this->redirectToRoute('app_add_calendrier',['idFournisseur'=>$idFournisseur, 'idType'=>$idType, 'idService'=>$service->getId()]);
        }
        
        return $this->render('pins/addService.html.twig',[
            'formService' => $form->createView() 
        ]);
    }
 

    /**
     * @Route("/pins/addCalendrier/{idFournisseur}/{idType}/{idService}",name="app_add_calendrier",methods={"Get","POST"})
     */
    
    public function addCalendrier(Request $request,$idFournisseur,$idType,$idService): Response
    {
        $manager = $this->getDoctrine()->getManager();
        $calendrier= new Calendrier();
        
        $form = $this->createForm(CalendrierType::class, $calendrier);
        $form->handleRequest($request);
        $service = $this->getDoctrine()
            ->getRepository(Service::class)
            ->find($idService);

        if($form->isSubmitted() && $form->isValid() ){
            $calendrier->setService($service);
            $manager->persist($calendrier);
            $manager->flush();
            return $this->redirectToRoute('app_add_calendrier',['idFournisseur'=>$idFournisseur, 'idType'=>$idType, 'idService'=>$idService]);
        }
        
        return $this->render('pins/addCalendrier.html.twig',[
            'formCalendrier' => $form->createView() 
        ]); 
        
    }
     /**
     * @Route("/reservation/showServices", name="app_show_services",methods={"Get","POST"})
     */
    public function recherche(Request $request,ReservationRepository $ReservationRep) : Response
    {
         /*$services = $this->getDoctrine()
        ->getRepository(Service::class)
        ->findAll();*/
   // dd($resultat);
     $resultat=[];
      $searcheForm=$this->createForm(RechercheType::class);

    if($searcheForm->handleRequest($request)->isSubmitted() and $searcheForm->isValid() ){
      $city=$request->get('recherche')['Ville'];
      $typeS=$request->get('recherche')['TypeService'];

     $query = $this->getDoctrine()->getManager()
                 ->createQuery("select s from App\Entity\Service s 
                  Join App\Entity\TypeService t where s.titre=:TypeService and t.type=:TypeService and s.ville=:Ville")
                ->setParameter('Ville', "$city")
                ->setParameter('TypeService', "$typeS");
              //dd($query);
    $resultat = $query->getResult();
     //dd($resultat);
       //$critaire=$searcheForm->getData();
       //dd($critaire);
       //$rechRDV=$ReservationRep->findByCity($critaire);
       //dd($rechRDV);
      }
      return $this->render('reservation/showServices.html.twig',['search_form'=>$searcheForm->createView(),
            'services'=>$resultat]);

    }

    /**
     * @Route("/reservation/showServices",name="app_show_services",methods={"Get","POST"})
     
    public function showServices(Request $request): Response
    {   
        
        $services = $this->getDoctrine()
        ->getRepository(Service::class)
        ->findAll();

        // if (!$services) {
        //     throw $this->createNotFoundException(
        //         'No service found'
        //     );
        // }

        return $this->render('reservation/showServices.html.twig',[
            'services'=>$services
        ]);
    }*/
    
   
 /**
 * @Route("/reservation/showCalendar/{idS}/{idClient}/{idRe}",name="app_show_calendar",methods={"Get","POST"})
  * @param Request $request
  * @param User $idClient
  * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
 */
    public function showCalendar(MailerInterface $mailer,GuardAuthenticatorHandler $guardHandler, LoginFormAuthenticator $authenticator,Request $request,$idS,Reservation $idRe=null,User $idClient=null): Response
    {   //fonction qui ajoute le service en bbd

           // $user_id= $request->query()->get('user_id');
   
           
        $manager = $this->getDoctrine()->getManager();
        
        //on searche si le rdv existe ou pas 
        $reservation= new Reservation();
        $form = $this->createForm(ReservationType::class, $reservation);
        $form->handleRequest($request);

         $service = $this->getDoctrine()
        ->getRepository(Service::class)
        ->find($idS);
        //dd($service);

        $fournisseur = $service->getFournisseur();


        $calendrier = $this->getDoctrine()
        ->getRepository(Calendrier::class)
        ->find($idS);

              
       
         $rdvNondispo=$this->getDoctrine()
        ->getRepository(Reservation::class)
        ->findBy(
            array('service'=>$service), 
        );
        $nondispo=array();
        foreach($rdvNondispo as $rdv){
            $date="".$rdv->getJour()->format('d/m/Y');
            $nondispo[$date][]=$rdv->getHeure();
        }
       // dd($this->getDoctrine()->getRepository(User::class)->find($idClient));
      
        
    //pour modifier le RDV 
       if($idRe!= null){
        $user=$this->getDoctrine()
            ->getRepository(User::class)
            ->find($idClient); 
    
            $rdv = $this->getDoctrine()
            ->getRepository(Reservation::class)
            ->find($idRe); 
         
           if($form->isSubmitted() && $form->isValid() && $rdv){
                $rdv->setClient($idClient);
                $rdv->setDuree($service->getCreneauBase());
                $rdv->setService($service);
                $rdv->setFournisseur($fournisseur);
                $rdv->setFrais(1089);
                $rdv->setHeure($_POST["time"]); 
                $date=$request->get("reservation");
                $rdv->setJour(\DateTime::createFromFormat('Y-m-d',$date['jour']));
                $manager->persist($rdv);
                $manager->flush();
                $this->addFlash('success',"Merci, votre RDV a bien été enregistré !");
             
                    
             $email= (new Email())
                ->from(new Address('noreplay@proximite.com', 'proximite'))
                ->to($user->getEmail())
                ->subject('Votre rendez-vous  à bien été changé')
                ->html('<h3 align="center">Bonjour votre rdv est bien été modifié</h3>
                    <p align="center">Rendez-vous :
                        Le '.$date["jour"].' à '.$_POST["time"].'
                    </p>
                    <p><B>Informations:</B> <br><br>
                   <B>Moyens de paiement et remboursement</B></br>
                        *Chèques</br>
                        *Espèces</br>
                        *Cartes Bancaires</br>

                   </p>
                   <p>
                    Vous pouvez continuer à vous rendre à votre consultation pendant le couvre-feu. Pensez simplement à vous munir de votre attestation.</br></br>
                    Afin d\'améliorer la sécurité de vos données, nous n\'affichons plus le détail de vos rendez-vous dans nos messages.</br></br>
                    </p>
                    <div><B>En cas d\'imprévu, pensez à le déplacer ou l\'annuler le plus tôt possible.</B></div></br>
                    <p>Cheers!</p>
                    <div>Services de proximité</br>
                    Montpellier
                    </div>

                ');
             $mailer->send($email);
              return $this->redirectToRoute('app_rdv');

            }
              
       }
   
    

          if ($this->getUser()==null) {
            $this->addFlash('error','Vous devez vous connecter avant de prendre le RDV!');//a revoir 
             return $this->redirectToRoute('app_login');
         }
         else{

        if($form->isSubmitted() && $form->isValid() &&  $idRe==null){
             $user=$this->getDoctrine()
            ->getRepository(User::class)
            ->find($idClient); 
            $reservation->setClient($idClient);
            $reservation->setDuree($service->getCreneauBase());
            $reservation->setService($service);
            $reservation->setFournisseur($fournisseur);
            $reservation->setFrais(10);
            $reservation->setHeure($_POST["time"]);
            //dump($reservation);
            
                $manager->persist($reservation);
                $manager->flush();

           
         $this->addFlash('success',"Merci, votre RDV a bien été enregistré !");
           // return $this->redirectToRoute('app_rdv');
           $newDate = $reservation->getJour()->format('d/m/Y');
        $email= (new Email())
                ->from(new Address('noreplay@proximite.com', 'proximite'))
                ->to($user->getEmail())
                ->subject('RDV le '. $newDate.' à '.$_POST["time"])
                ->html('<h3 align="center">Bonjour votre rdv est bien été enregistré</h3>
                    <p align="center">Votre rendez-vous:<br><br>
                         '.$newDate.' à '.$_POST["time"].'
                   
                    </p>
                    <div>En cas d\'imprévu, pensez à le déplacer ou l\'annuler le plus tôt possible.</div>
                    <p>Cheers!</p>
                    <div>Services de proximité</br>
                    Montpellier
                    </div>

                ');
             $mailer->send($email);
             return $this->redirectToRoute('app_rdv');
        }
      
        
    }

        return $this->render('reservation/showCalendar.html.twig',[
            'calendrier' => $calendrier,
            'formRdv' => $form->createView(),
            'service'=>$service,
            'nondispo'=>$nondispo
            
        ]);

    
    }

     

     /**
     * @Route("/fullCalendar/{idFournisseur}",name="app_fullCalendar",methods={"Get","POST"})
     */
    public function fullCalendar(Request $request,$idFournisseur): Response
    {   
        $manager = $this->getDoctrine()->getManager();

        $fournisseur = $this->getDoctrine()
        ->getRepository(Fournisseur::class)
        ->find($idFournisseur);

        $reservation= new Reservation();     

        $reservations=$this->getDoctrine()
        ->getRepository(Reservation::class)
        ->findBy(
            array('fournisseur'=>$fournisseur), 
        );
        //dump($reservations);
        $rdvs=[];
        foreach($reservations as $reservation){
            $heureDebut=$reservation->getHeure();
            $duree=$reservation->getDuree();
            $client=new User();
            $client =$reservation->getClient();
            $title="RDV".$client->getUuid();
            
            $start="".$reservation->getJour()->format('Y-m-d')." ".$reservation->getHeure();
            $time = strtotime($heureDebut);
            $endTime = date("H:i", strtotime('+'.$duree.'minutes', $time));
            $end="".$reservation->getJour()->format('Y-m-d')." ".$endTime;
            
            $rdvs[]=[
                
                'id'=>$reservation->getId(),
                'start'=> $start,
                'end'=>$end,
                'title'=>$title,
                'color'=> '#ffcc00',
                'textColor'=>'#003300',
                
                
            ];
        }
        $data=json_encode($rdvs);
        return $this->render('reservation/fullCalendar.html.twig',['idF'=>$idFournisseur,'data'=>$data]);
    
    }
     /**
     * @Route("/changeOuiHonore/{idF}/{idR}",name="app_change_honore_oui",methods={"Get","POST"})
     */
    public function changeOuiHonore(Request $request,$idF,$idR): Response
    {	
        $manager = $this->getDoctrine()->getManager();
        $reservation = $this->getDoctrine()
        ->getRepository(Reservation::class)
        ->find($idR);
        $reservation->setEstHonore(1);
        $manager->persist($reservation);
        $manager->flush();
        return $this->redirectToRoute('app_affiche_reservation', ['idF' => $idF]);
    }

    /**
     * @Route("/changeNonHonore/{idF}/{idR}",name="app_change_honore_non",methods={"Get","POST"})
     */
    public function changeNonHonore(Request $request,$idF,$idR): Response
    {	
        $manager = $this->getDoctrine()->getManager();
        $reservation = $this->getDoctrine()
        ->getRepository(Reservation::class)
        ->find($idR);
        $reservation->setEstHonore(0);
        $manager->persist($reservation);
        $manager->flush();
        return $this->redirectToRoute('app_affiche_reservation', ['idF' => $idF]);
    }

     /**
     * @Route("/afficheReservations/{idF}",name="app_affiche_reservation",methods={"Get","POST"})
     */
    public function afficheReservation(Request $request,$idF): Response

    {   

        $fournisseur = $this->getDoctrine()
        ->getRepository(Fournisseur::class)
        ->find($idF);

        $reservations= new Reservation();     

        $reservations=$this->getDoctrine()
        ->getRepository(Reservation::class)
        ->findBy(
            array('fournisseur'=>$fournisseur), 
        );
        
        $rdvs=[];
        foreach($reservations as $reservation){
            $heureDebut=$reservation->getHeure();
            $duree=$reservation->getDuree();
            $client=new User();
            $client =$reservation->getClient();
            $title="".$client->getUuid();
            //dump($title);
            $start="".$reservation->getHeure();
            $time = strtotime($heureDebut);
            $endTime = date("H:i", strtotime('+'.$duree.'minutes', $time));
            $end="".$endTime;
           
            $jour=$reservation->getJour();
            $now = new \DateTime("now");
            $etat="";
            if ($jour < $now ) {
               $etat="Passé";
            } else{
               $etat="A venir";
            }
            
         
            $h=$reservation->getEstHonore();
            $honore="";
            if(isset($h)){
                if($h==true){
                    $honore="Oui";
                }
                else if($h==false){
                    $honore="Non";
                }
            }
            $rdvs[]=[
                'id'=>$reservation->getId(),
                'jour'=>$reservation->getJour(),
                'start'=> $start,
                'end'=>$end,
                'client'=>$title,
                'etat'=>$etat,  
                'honore'=>$honore
            ];
            //dump($honore);
        }
        
        //formulaire de recherche 
        $parPeriode = [];
        $SearchPeriod = $this->createFormBuilder($parPeriode, array(
            'csrf_protection' => true,
            'csrf_field_name' => '_token',
        ))
            ->add('du',DateType::class, [
                'widget' => 'single_text',
            ])
            ->add('au',DateType::class, [
                'widget' => 'single_text',
            ])
            ->add('recherche_une_periode', SubmitType::class)
            ->getForm();

        $SearchPeriod->handleRequest($request);
        $r=[];
        if ($SearchPeriod->isSubmitted()) {
            $data = $SearchPeriod->getData();
            $r = $this->getDoctrine()
            ->getRepository(Reservation::class)
            ->findAllBetweenDates($data["du"],$data["au"]);
        }
        
        dump($r);
        $RDVS=[];
        foreach($rdvs as $rdv){
            foreach($r as $reservation){
                if($reservation->getJour()==$rdv["jour"] && $reservation->getId()==$rdv["id"]){
                    $RDVS[]=$rdv;
                }
            }
        }
        
        $total=sizeof($rdvs);
        $recherche=sizeof($RDVS);
        return $this->render('fournisseur/afficheReservations.html.twig',[
            'idF'=>$idF,
            'reservations'=>$rdvs,
            'periode'=>$SearchPeriod->createView(),
            'rdvs'=>$RDVS,
            'total'=>$total,
            'nbrecherche'=>$recherche
         
        ]);

    
    }

   
}
