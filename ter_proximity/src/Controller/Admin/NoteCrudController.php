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

class NoteCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Notes::class;
    }


    public function configureFields(string $pageName): iterable
    {
        
        $fields = [
            AssociationField::new('client')->hideOnForm(),
            AssociationField::new('fournisseur')->hideOnForm(),
            NumberField::new('niveau_satisfaction'),
            NumberField::new('probleme_rdv'),
            TextField::new('commentaire'),
            // AssociationField::new('type')->autocomplete(),
            // 
        ];

        
        return $fields;
    }
    
    public function suppression(AdminContext $context)
    {  
        return $this->redirect($this->get(CrudUrlGenerator::class)->build()->setAction(Action::INDEX)->generateUrl());
    }
    public function configureActions(Actions $actions): Actions
    {
       
        return $actions
        ->add(Crud::PAGE_INDEX, Action::DETAIL)
            ->setPermission(Action::DETAIL, 'ROLE_ADMIN')
            ->setPermission(Action::INDEX, 'ROLE_ADMIN')
            ->setPermission(Action::EDIT, 'ROLE_ADMIN')
            ->setPermission(Action::SAVE_AND_RETURN, 'ROLE_ADMIN')
            ->setPermission(Action::SAVE_AND_CONTINUE, 'ROLE_ADMIN')
            ->disable(Action::DELETE)
           
        ;
    }
}