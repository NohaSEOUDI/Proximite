<?php

namespace App\Controller\Admin;

use App\Entity\Fournisseur;
use App\Entity\Service;
use App\Entity\TypeService;
use App\Entity\Notes;
use App\Entity\Reservation;
use App\Entity\Calendrier;
use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Context\AdminContext;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TelephoneField;
use EasyCorp\Bundle\EasyAdminBundle\Field\MoneyField;
use EasyCorp\Bundle\EasyAdminBundle\Field\LocaleField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\EmailField;
use Vich\UploaderBundle\Form\Type\VichImageType;
use EasyCorp\Bundle\EasyAdminBundle\Router\CrudUrlGenerator;

class ClientCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return User::class;
    }


    public function configureFields(string $pageName): iterable
    {
        
        $fields = [
            EmailField::new('email'),
            TextField::new('uuid'),
            // AssociationField::new('type')->autocomplete(),
            // AssociationField::new('fournisseur')->hideOnForm(),
        ];

        
        return $fields;
    }
    public function suppression(AdminContext $context)
    {   $manager = $this->getDoctrine()->getManager();
        $id = $context->getRequest()->query->get('entityId');
        $client=  $this->getDoctrine()
        ->getRepository(User::class)
        ->find($id);

        $note= $this->getDoctrine()
        ->getRepository(Notes::class)
        ->findBy(
            array('client'=>$client), 
        );

        $reservation= $this->getDoctrine()
        ->getRepository(Reservation::class)
        ->findBy(
            array('client'=>$client), 
        );
        
        dump($client);
        dump($reservation);
        dump($note);
        dump($id);
        foreach ($reservation as $r) {
            $manager->remove($r);
        }
        foreach ($note as $n) {
            $manager->remove($n);
        }
        $manager->remove($client);
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