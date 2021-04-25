<?php

namespace App\Form;

use App\Entity\Reservation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;
class ReservationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
           ->add('jour',DateType::class, [
            'widget' => 'single_text',
            // adds a class that can be selected in JavaScript
            'attr' => ['class' => 'js-datepicker'],
            'input'  => 'datetime_immutable'])
        //    ->add('heure', TextType::class)
        // ->add('oui',ButtonType::class, [
        //     'attr' => ['value' => 'true'],
        // ])
        // ->add('non',ButtonType::class, [
        //     'attr' => ['value' => 'false'],
        // ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Reservation::class,
        ]);
    }
}
