<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Component\Notifier\Notification\Notification;
use Symfony\Component\Notifier\NotifierInterface;
use Symfony\Component\Form\FormTypeInterface;
use App\Entity\Reservation;
use App\Entity\Fournisseur;
use App\Entity\User;
use App\Entity\Notes;
use App\Repository\NotesRepository;
use App\Form\NotesType;
use App\Repository\ReservationRepository;
use App\Repository\UserRepository;
use App\Entity\Service;
use Symfony\Component\Form\Extension\Core\Type\TextType;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;


use Symfony\Component\Form\Extension\Core\Type;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;




use Symfony\Component\Form\AbstractType;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class PriseRdvController extends AbstractController
{
    /**
     * @Route("/prise/rdv/", name="app_rdv")
     */
    public function index(ReservationRepository $priseRdv,UserRepository $user): Response
    {
        $Reservations= $priseRdv->findAll();
        return $this->render('pins/prise_rdv/indexRdv.html.twig'
          ,compact('Reservations'));
    }

  
   /**
    *@Route("/prise/rdv/{id}",name="app_rdv_delete",methods="GET|Delete",
    requirements={"id":"\d+"})
   * 
   */
    public function delete($id,ReservationRepository $priseRdv,Request $request,Reservation $r,EntityManagerInterface $em): Response
    {
  
    $val=$r->getFournisseur()->getId();
   
    $var=$priseRdv->findOneBySomeField($val);//fonction qui retourne un Array 

    $value=$var["politique"];//je récupere la valeur

     
      $article=$em->getRepository(Reservation::class);
      if(is_null( $r)){
        throw new Exception("Error Processing Request :".$r);
        
      }
    
      switch($value){
         case 'Pas de possibilité dannulation une fois le client a réservé':
             $this->addFlash('error','Vous n\'avez pas le droit d\'annuler le rdv');
             $this->redirectToRoute('app_rdv');
             break;
        default :
         $em->remove($r);
         $em->flush();
         $this->addFlash('success', 'Votre rdv a bien été annulé !');

      }
   

       //}
    
    
      return $this->redirectToRoute('app_rdv'); 

    }


    /**
     * @Route("/prise/rdv/{id}/noter",name="app_rdv_noter",methods="GET|POST")
     *
     */
    public function add(NotesRepository $NotesRep,ReservationRepository $priseRdv,Request $request,Reservation $r): Response
    { //id dans le route celle du reservation
      if($r->getEstHonore()==0){
        $this->addFlash('error','Vous n\'avez pas le droit de noter');
        return $this->redirectToRoute('app_rdv');
      }
      

      $notes=new Notes();
      $f=new fournisseur();
      $form=$this->createForm(NotesType::class, $notes);
      $form->handleRequest($request);
      
       if ($form->isSubmitted() && $form->isValid()) {
        $entityManager = $this->getDoctrine()->getManager();
        //dd($r);
        $notes->setClient($r->getClient());
        $notes->setFournisseur($r->getFournisseur());

        //le score moyenne du fournisseur en question 
         $moyenne=$NotesRep->avgScore($notes->getFournisseur());
         $value=$moyenne["scoreMoyenne"];
         //dd($value);
         $r->getFournisseur()->setNoteMoyenne($value);
         //---------------
        $entityManager->persist($notes);
        $entityManager->flush();
         //dd($r->getFournisseur()->getNoteMoyenne());
        $this->addFlash('success','Merci d\'avoir donnez votre avis');
       return  $this->redirectToRoute('app_rdv');
       // dd($value);

      }
     // dd($notes);
      return $this->render('pins/prise_rdv/noterF.html.twig',['form'=>
      $form->createView()]);
    }    

    /**
    *@Route("/prise/rdv/{id}/edit",name="app_rdv_edit",methods="GET|POST",
    requirements={"id":"\d+"})
    *
    */
    public function edit($id,ReservationRepository $priseRdv,Request $request,Reservation $r,EntityManagerInterface $em): Response
   {    
    //dd($id);

    $val=$r->getFournisseur()->getId();

    $service=$r->getService()->getId();
     //dd($val);
    $idclient=$r->getClient()->getId();
    //dd($idclient);
    $var=$priseRdv->findOneBySomeField($val);//fonction qui retourne un Array 
    //dd($var);
    $value=$var["politique"];//je récupere la valeur de la politique 
   //dd($value);
  if($r->getEstHonore()==1){
        $this->addFlash('error', 'Votre rdv est passée !');
         $this->redirectToRoute('app_rdv');
         return $this->render('pins/prise_rdv/indexRdv.html.twig', [
                'Reservations'=>$r,
              ]);

       }
  else{

       switch($value){
            case 'Nécessite de payement dun acompte pour toute réservation':
             $this->addFlash('info','Vous devez payer un acompte pour toute réservation');
               $this->redirectToRoute('app_rdv');
              return $this->render('pins/prise_rdv/edit.html.twig', [
                'Reservations'=>$r,
              ]);
              break;

            case 'Possibilité de modification avec frais':
             $this->addFlash('info','Vous devez payer le frais demander avant la modification');
              $this->redirectToRoute('app_rdv');
             return $this->render('pins/prise_rdv/edit.html.twig', [
                'Reservations'=>$r,
              ]);
              break;
            case 'Possibilité de modification sans frais':
              $this->addFlash('success','Vous pouvez modifier votre rdv sans frais');
             
       return  $this->redirectToRoute('app_show_calendar',array('idS'=>$service,'idClient'=> $idclient, 'idRe'=>$id));
           $this->addFlash('success','Votre rdv est bien été changer');
           $this->redirectToRoute('app_rdv');
              break;

            default :
             $this->addFlash('error','vous n\'avez pas le droit de modifier votre rdv ');

              return $this->redirectToRoute('app_rdv');
        }

       
      }
       /*return $this->render('pins/prise_rdv/index.html.twig',
          ['Reservations'=>$r]
        );*/
        
    }

}