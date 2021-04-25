<?php

namespace App\Controller\Admin;

use App\Entity\Fournisseur;
use App\Entity\Service;
use App\Entity\TypeService;
use App\Entity\Notes;
use App\Entity\Reservation;
use App\Entity\Calendrier;
use EasyCorp\Bundle\EasyAdminBundle\Context\AdminContext;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\EmailField;
use Vich\UploaderBundle\Form\Type\VichImageType;
use EasyCorp\Bundle\EasyAdminBundle\Router\CrudUrlGenerator;

class FournisseurCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Fournisseur::class;
    }


    public function configureFields(string $pageName): iterable
    {
        
        $fields = [
            EmailField::new('email'),
            TextField::new('nom'),
            TextField::new('prenom'),
            TextField::new('politique'),
            // AssociationField::new('type')->autocomplete(),
            // AssociationField::new('fournisseur')->hideOnForm(),
        ];

        
        return $fields;
    }
    public function suppression(AdminContext $context)
    {   $manager = $this->getDoctrine()->getManager();
        $id = $context->getRequest()->query->get('entityId');
        $fournisseur= $this->getDoctrine()->getRepository(Fournisseur::class)->find($id);
        $service= $this->getDoctrine()->getRepository(Service::class)->findBy(
            array('fournisseur'=>$fournisseur), 
        );
        dump($service);
        
        $calendrier= $this->getDoctrine()->getRepository(Calendrier::class)->findBy(
            array('service'=>$service), 
        );
        $reservation= $this->getDoctrine()->getRepository(Reservation::class)->findBy(
            array('fournisseur'=>$fournisseur), 
        );
        $note= $this->getDoctrine()->getRepository(Notes::class)->findBy(
            array('fournisseur'=>$fournisseur), 
        );
        dump($fournisseur);
        dump($service);
        dump($calendrier);
        dump($reservation);
        foreach ($reservation as $r) {
            $manager->remove($r);
        }
        foreach ($calendrier as $c) {
            $manager->remove($c);
        }
        foreach ($note as $n) {
            $manager->remove($n);
        }
        foreach ($service as $s) {
            $manager->remove($s);
        }
        $manager->remove($fournisseur);
        $manager->flush();
        return $this->redirectToRoute('admin');
    }
    public function configureActions(Actions $actions): Actions
    {
        $suppression = Action::new('View Invoice', 'Supprimer')
        ->linkToCrudAction('suppression');
        return $actions
            ->disable(Action::DELETE)
            ->add(Crud::PAGE_INDEX, $suppression)
            
            ->setPermission($suppression, 'ROLE_ADMIN')
            ->add(Crud::PAGE_INDEX, Action::DETAIL)
            ->setPermission(Action::DETAIL, 'ROLE_ADMIN')
            ->setPermission(Action::INDEX, 'ROLE_ADMIN')
            ->setPermission(Action::EDIT, 'ROLE_ADMIN')
            ->setPermission(Action::SAVE_AND_RETURN, 'ROLE_ADMIN')
            ->setPermission(Action::SAVE_AND_CONTINUE, 'ROLE_ADMIN')
        ;
    }
}