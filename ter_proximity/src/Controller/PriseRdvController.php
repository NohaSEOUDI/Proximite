<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\PriseRdv;
use App\Repository\PriseRdvRepository;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use App\Entity\Pin;
use App\Entity\User;
use App\Repository\PinRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;


use Symfony\Component\Form\Extension\Core\Type;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class PriseRdvController extends AbstractController
{
    /**
     * @Route("/prise/rdv", name="app_rdv")
     */
    public function index(PriseRdvRepository $priseRdv): Response
    {
    	$rdv= $priseRdv->findAll();
        return $this->render('pins/prise_rdv/indexRdv.html.twig',compact('rdv'));
    }

 

 /**
 *@Route("/prise/rdv/{id}",name="app_rdv_delete",methods="GET|Delete", requirements={"id":"\d+"})
 * 
 */

    public function delete(PriseRdv $r,EntityManagerInterface $em): Response
    {
    	$em->remove($r);
    	$em->flush();
    	return $this->redirectToRoute('app_rdv'); 

    }

}
