<?php

namespace App\Form;

use App\Entity\Fournisseur;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\RadioType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class FournisseurType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email',EmailType::class)
            ->add('password',PasswordType::class)
            ->add('nom')
            ->add('prenom')
            ->add('politique',ChoiceType::class,array(
                'choices'  => array(
                ' Nécessite de payement dun acompte pour toute réservation' => '  Nécessite de payement dun acompte pour toute réservation',
                'Possibilité de modification sans frais'=>'Possibilité de modification sans frais',
                'Possibilité de modification avec frais'=>'Possibilité de modification avec frais',
                'Pas de possibilité dannulation une fois le client a réservé' => 'Pas de possibilité dannulation une fois le client a réservé'
                ),
                'expanded' => true,
                'multiple' => false
            ))
            ->add('frais',null,array( 'label' => ' '))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Fournisseur::class,
        ]);
    }
}
