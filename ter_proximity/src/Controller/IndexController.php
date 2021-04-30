<?php

namespace App\Controller;

use App\Entity\VillesFranceFree;
use App\Form\VilleType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    #[Route('/123', name: 'index')]
    public function index(): Response
    {
        $ville=new VillesFranceFree();
        $ville->setVilleDate(new \DateTime('now'));
        $form=$this->createForm(VilleType::class,$ville,[
            'action'=>$this->generateUrl('ville'),
            'method'=>'GET'
        ]);

        return $this->render('index/index.html.twig', [
            'controller_name' => 'IndexController',
            'form'=>$form->createView()
        ]);
    }

    #[Route('/ville', name: 'ville')]
    public function ville(Request $request): Response
    {
        $requestData=$request->query->all();
        $villeNom=$requestData['ville']['villeNom'];
        $villeDate=$requestData['ville']['villeDate'];


        $ville=$this->getDoctrine()
            ->getRepository(VillesFranceFree::class)
            ->findOneBy(['villeNom'=>$villeNom]);

        if (!$ville){
            return $this->redirectToRoute('index');
        }

        return $this->render('index/ville.html.twig',[
            'ville'=>$ville
        ]);
    }
}
