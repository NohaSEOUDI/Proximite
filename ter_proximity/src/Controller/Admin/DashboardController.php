<?php

namespace App\Controller\Admin;

use App\Entity\Service;
use App\Entity\TypeService;
use App\Entity\Fournisseur;
use App\Entity\User;
use App\Entity\Notes;
use EasyCorp\Bundle\EasyAdminBundle\Context\AdminContext;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use EasyCorp\Bundle\EasyAdminBundle\Router\CrudUrlGenerator;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin",name="admin")
     *
     * @return Response
     */
    public function index(): Response
    {
        $routeBuilder = $this->get(CrudUrlGenerator::class)->build();

        return $this->redirect($routeBuilder->setController(FournisseurCrudController::class)->generateUrl());
    }

    public function configureMenuItems(): iterable
    {
        
        yield MenuItem::section('Fournisseurs et Services');
        yield MenuItem::linkToCrud('Fournisseurs', 'fa fa-user', Fournisseur::class)
         ->setController(FournisseurCrudController::class);
        // pour envoyé un mail
        // MenuItem::linkToRoute('The Label', 'fa ...', 'route_name', ['routeParamName' => 'routeParamValue']),
        yield MenuItem::linkToCrud('Services', 'fa fa-file-pdf', Service::class);
        yield MenuItem::linkToCrud('Types', 'fa fa-tags', TypeService::class);

        yield MenuItem::section('Clients');
        yield MenuItem::linkToCrud('Clients', 'fa fa-user', User::class);
        yield MenuItem::linkToCrud('Notes', 'fa fa-file-pdf', Notes::class);
    }
    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Proximity Control.')
            ->renderContentMaximized()

            
        ;
    }

    
}
