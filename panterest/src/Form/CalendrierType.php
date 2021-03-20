<?php

namespace App\Form;

use App\Entity\Calendrier;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CalendrierType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('lundiDebut',null,array('label' => false))
            ->add('lundiFin',null,array('label' => false))
            ->add('mardiDebut',null,array('label' => false))
            ->add('mardiFin',null,array('label' => false))
            ->add('mercrediDebut',null,array('label' => false))
            ->add('mercrediFin',null,array('label' => false))
            ->add('jeudiDebut',null,array('label' => false))
            ->add('jeudiFin',null,array('label' => false))
            ->add('vendrediDebut',null,array('label' => false))
            ->add('vendrediFin',null,array('label' => false))
            ->add('samediDebut',null,array('label' => false))
            ->add('samediFin',null,array('label' => false))
            ->add('dimancheDebut',null,array('label' => false))
            ->add('dimancheFin',null,array('label' => false))
            
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Calendrier::class,
        ]);
    }
}
