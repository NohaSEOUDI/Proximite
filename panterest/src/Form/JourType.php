<?php

namespace App\Form;

use App\Entity\JourService;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TimeType;

class JourType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
           
            ->add('heureDebutAm',null,array('label' => false))
            ->add('heureFinAm',null,array('label' => false))
            ->add('heureDebutPm',null,array('label' => false))
            ->add('heureFinPm',null,array('label' => false))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => JourService::class,
        ]);
    }
}
