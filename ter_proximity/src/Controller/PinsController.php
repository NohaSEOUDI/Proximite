<?php

namespace App\Controller;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use App\Entity\Pin;
use App\Entity\User;
use App\Repository\PinRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
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
use App\Entity\Service;
use App\Form\ServiceType;
use App\Entity\JourService;
use App\Form\JourType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class PinsController extends AbstractController
{	private $em;

    /**
     * @Route("/",name="app_home",methods={"Get","POST"})
     */
    public function index(PinRepository $rep): Response
    {	
        /*$Auth=new Auth;
       // $Auth->setId(1);
        $Auth->setEmail('nnn@gamil.com');
        $Auth->setMotDePass('123');
        $Auth->setConfMotDePass('123');
        $em=$this->getDoctrine()->getManager();
        $em->persist($Auth);
        $em->flush();*/
      
        return $this->render('pins/index.html.twig');
    }
     /**
     * @Route("/app_login",name="app_login" ,methods="POST")
     */
    public function create(Request $request,EntityManagerInterface $em): Response{
        /*$form = $this->createFormBuilder()
            ->add('email')
           // ->add('pseudo')
            ->add('password')
            //->add('password2')
           //->add('submit', SubmitType::class, ['label'=>'create Client account '])
            ->getForm()
        ;
       // dd($form);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){//type post
            //dd('Taitement');
            $data=$form->getData();
            $user=new User();
          //  $user->setUuid("okjpk");//?
           // $user->setRoles($data['role']);
            $user->setPassword($data['password']);
            $user->setEmail($data['email']);
            //$user->setPassword2($data['password2']);
            $em->persist($user);
            $em->flush();

            return $this->redirectToRoute('app_home');
        }   */
    	return $this->render('pins/create.html.twig');
    }

    /**
     * @Route("/inscription",name="app_pins_inscrit" ,methods={"Get","POST"})
     */
    public function inscrit(Request $request,EntityManagerInterface $em): Response{
      /*$form = $this->createFormBuilder()
            ->add('email')
            ->add('pseudo')
            ->add('password')
            ->add('password2')
           //->add('submit', SubmitType::class, ['label'=>'create Client account '])
            ->getForm()
        ;
       // dd($form);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){//type post
            //dd('Taitement');
            $data=$form->getData();
            $user=new User();
            $user->setUuid("okjpk");//?
           // $user->setRoles($data['role']);
            $user->setPassword($data['password']);
            $user->setEmail($data['email']);
            $user->setPassword2($data['password2']);

            $em->persist($user);
            $em->flush();

            return $this->redirectToRoute('app_home');
        }   */
        return $this->render('pins/inscription.html.twig');
    }


  /**
     * @Route("/pins/addfournisseur",name="app_add_fournisseur",methods={"Get","POST"})
     */
    public function addfournisseur(Request $request): Response
    {   //////////les données du formulaire revienne à la meme fonction

        $manager = $this->getDoctrine()->getManager();
        $fournisseur= new Fournisseur();

        $form = $this->createForm(FournisseurType::class, $fournisseur);
       
        //analyser la request qui contient les saisie du form
        $form->handleRequest($request);
        //dump($fournisseur); //verifier le bind entre le form et fournisseur

        
        if($form->isSubmitted() && $form->isValid() ){

            $manager->persist($fournisseur);
            $manager->flush();
            return $this->redirectToRoute('app_add_type',['idFournisseur'  => $fournisseur->getId()]);
        }


        return $this->render('pins/addfournisseur.html.twig',[
            'formFournisseur' => $form->createView() //passer une view du formulaire a twig pour qu'il l'affiche
        ]);//ensuite aller afficher ce formulaire dans la page twig correspondante
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

        
        var_dump($idFournisseur);
        var_dump($idType);
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
        $jlundi= new JourService();
        $jmardi= new JourService();
        $jmercredi= new JourService();
        $jjeudi= new JourService();
        $jvendredi= new JourService();
        $jsamedi= new JourService();
        $jdimanche= new JourService();
        
        $lundi = $this->createForm(JourType::class, $jlundi);
        $mardi = $this->createForm(JourType::class, $jmardi);
        $mercredi = $this->createForm(JourType::class, $jmercredi);
        $jeudi = $this->createForm(JourType::class, $jjeudi);
        $vendredi = $this->createForm(JourType::class, $jvendredi);
        $samedi = $this->createForm(JourType::class, $jsamedi);
        $dimanche = $this->createForm(JourType::class, $jdimanche);
       
        // $form->handleRequest($request);

        //  $service = $this->getDoctrine()
        //      ->getRepository(Service::class)
        //      ->find($idService);
     
        
        // dump($service);
        // var_dump($service->getId());
        // if($form->isSubmitted() && $form->isValid() ){
        //     echo "avant setService";
        //     $jour->setService($service);
        //     echo "apres setService";
        //     $manager->persist($jour);
        //     $manager->flush();
        //     return $this->redirectToRoute('app_add_calendrier',['idFournisseur'=>$idFournisseur, 'idType'=>$idType,'idService'=>$idService]);

            
        // }
        

        return $this->render('pins/addCalendrier.html.twig',[
            'formLundi' => $lundi->createView(), 
            'formMardi' => $mardi->createView(),
            'formMercredi' => $mercredi->createView(),
            'formJeudi' => $jeudi->createView(),
            'formVendredi' => $vendredi->createView(),
            'formSamedi' => $samedi->createView(),
            'formDimanche' => $dimanche->createView()
        ]);
    }











    
}
