<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Reservation;
use App\Entity\Fournisseur;
use App\Repository\ReservationRepository;

use Symfony\Component\Form\Extension\Core\Type\TextType;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;


use Symfony\Component\Form\Extension\Core\Type;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

class PriseRdvController extends AbstractController
{

   

    /**
     * @Route("/prise/rdv", name="app_rdv")
     */
    public function index(ReservationRepository $priseRdv): Response
    {
        $Reservations= $priseRdv->findAll();
        return $this->render('pins/prise_rdv/indexRdv.html.twig',compact('Reservations'));
    }

   /**
   *@Route("/prise/rdv/{id}",name="app_rdv_delete",methods="GET|Delete")
   * 
   */
    public function delete(Fournisseur $f,Request $request,Reservation $r,EntityManagerInterface $em): Response
    {
     
      $article=$em->getRepository(Reservation::class);
      if(is_null( $r)){
        throw new Exception("Error Processing Request :".$r);
        
      }
      switch($f->getPolitique()){
         case 'Pas de possibilité dannulation une fois le client a réservé':
             $this->addFlash('error','Vous n\'avez pas le droit d\'annuler le rdv');
             $this->redirectToRoute('app_rdv');
             break;
        default :
         $em->remove($r);
         $em->flush();
         $this->addFlash('success', 'Votre rdv a bien été annulé !');

      }
    
      return $this->redirectToRoute('app_rdv'); 

    }

 
    /**
     *@Route("/prise/rdv/{id}/edit",name="app_rdv_edit",methods="GET|Delete", requirements={"id":"\d+"})
     *
     */
    public function edit($id,ReservationRepository $priseRdv,Request $request,Fournisseur $f,Reservation $r,EntityManagerInterface $em): Response
   {    
   // $var=$priseRdv->findOneBySomeField($r->getId());
    //dd($var);
    $pol="SELECT politique from fournisseur,Reservations where Reservations.fournisseur_id=fournisseur.id";
    /*$stmt=$this->getDoctrine()->getManager()->getConnection()->prepare($pol);
   ;
     
    //dd($stmt->execute()->fetchAll());
 $query =  $this->createQueryBuilder('a')
      ->select('a.id, a.name, v.name')
      ->join('a.ville', 'v')
      ->andWhere('a.created_at BETWEEN :dateOne AND :dateTwo')
      ->andWhere('v.name = "Troyes"')
      ->setParameters([
         'dateOne' => $dateOne,
         'dateTwo' => $dateTwo
      ])
      ->getQuery()
      ->getResult();*/
       switch($f->getPolitique()){
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
              //return $this->render('pins/prise_rdv');
              return $this->redirectToRoute('app_rdv');
              //return $this->redirectToRoute('app_add_calendrier');
              break;

            default :
             $this->addFlash('error','vous n\'avez pas le droit de modifier votre rdv default');

              return $this->redirectToRoute('app_rdv');
        }
      //}
       /* return $this->render('pins/prise_rdv/edit.html.twig',
          ['Reservations'=>$r]
        );*/
        
    }

}