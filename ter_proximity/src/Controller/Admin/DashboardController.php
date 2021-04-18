<?php

namespace App\Controller\Admin;

use App\Entity\Service;
use App\Entity\TypeService;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use EasyCorp\Bundle\EasyAdminBundle\Router\CrudUrlGenerator;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin")
     *
     * @return Response
     */
    public function index(): Response
    {
        $routeBuilder = $this->get(CrudUrlGenerator::class)->build();

        return $this->redirect($routeBuilder->setController(ServiceCrudController::class)->generateUrl());
    }

    public function configureMenuItems(): iterable
    {
        
        yield MenuItem::section('Fournisseurs et Services');
        yield MenuItem::linkToCrud('Services', 'fa fa-file-pdf', Service::class);
        yield MenuItem::linkToCrud('Types', 'fa fa-tags', TypeService::class);
    }
}
