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
}
