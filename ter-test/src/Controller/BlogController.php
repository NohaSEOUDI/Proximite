<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    #[Route('/blog', name: 'blog')]
    public function index(): Response
    {
        return $this->render('blog/index.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }

    #[Route('/', name: 'home')]
    public function home(){
        return $this->render('blog/home.html.twig',[
            'title'=>"Introduisez vos acteurs favoris !",
        ]);
    }

    #[Route('/blog/add', name: 'add_actor')]
    public function add(){
        return $this->render('blog/add.html.twig');
    }

    #[Route('/blog/all', name: 'show_all')]
    public function show(){
        return $this->render('blog/all.html.twig');
    }
}
