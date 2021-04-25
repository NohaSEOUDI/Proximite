<?php

namespace App\Form;

use App\Entity\Notes;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\RadioType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;



class NotesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('problemeRDV',ChoiceType::class,array(
                'choices'  => array(
                'oui ' => '1',
                'Non'=>'0'
                ),
                'expanded' => true,
                'multiple' => false,
                'label' => 'Avez-vous eu des problèmes lors de la prise de rdv ? '
            ))
            ->add('prixService',ChoiceType::class,array(
                'choices'  => array(
                ' oui ' => '1',
                'Non'=>'0'
                ),
                'expanded' => true,
                'multiple' => false,
                'label' => 'Est-ce que le prix de service du fournisseur était convenable ? '
            ))
            ->add('niveauSatisfaction', ChoiceType::class,array(
                'choices'  => array(
                'Très satisfiable' => '5',
                'Satisfiable' => '4',
                'Neutre' => '3',
                'Insatisfaits' => '2',
                'Très insatisfaits' => '1'
                ),
                'expanded' => true,
                'multiple' => false,
                'label' => 'Quel est le niveau de satisfaction globale de service'
            ))
            ->add('utiliszerService',ChoiceType::class,array(
                'choices'  => array(
                ' oui ' => '1',
                'Non'=>'0'
                ),
                'expanded' => true,
                'multiple' => false,
                'label' => 'Utiliserz-vous notre service à l\'avenir ?'
            ))
            ->add('commentaire',TextareaType::class,array(
                'required' => false,
                'label' => 'Auriez-vous des remarques ou suggestions d\'amélioration ? '
            ))
            
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Notes::class,
        ]);
    }
}
