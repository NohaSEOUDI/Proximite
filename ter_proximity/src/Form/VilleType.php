<?php

namespace App\Form;

use App\Entity\VillesFranceFree;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class VilleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('villeNom', ChoiceType::class, [
                'placeholder' => 'Choisissez le type de votre service',
                'choices'  => [
                    
                    'Montpellier' => 'Montpellier',
                    'Paris' => 'Paris',
                    'Toulouse' => 'Toulouse',
                    'Autres'=>'Autres'],])
            ->add('villeDate',ChoiceType::class, [
                'placeholder' => 'Choisissez le type de votre service',
                'choices'  => [
                    
                    'Plomberie-Installation sanitaire' => 'Plomberie-Installation sanitaire',
                    'Platrier - Plaquiste -Décorateur' => 'Platrier - Plaquiste -Décorateur',
                    'Maçonnerie' => 'Maçonnerie',
                    'Réparation électroménager' => 'Réparation électroménager',
                    'Réparation téléphone' => 'Réparation téléphone',
                    'Réparation matériels électroniques' => 'Réparation matériels électroniques',
                    'Femme de ménage' => 'Femme de ménage',
                    'Plongeur' => 'Plongeur',
                    'Agent de nettoyage' => 'Agent de nettoyage',
                    'Agent de sécurité' => 'Agent de sécurité',
                    'Aide-soignante' => 'Aide-soignante',
                    'Couturier/Tailleur' => 'Couturier/Tailleur',
                    'Clown' => 'Clown',
                    'Animateur' => 'Animateur',
                    'Hôte-hôtesse' => 'Hôte-hôtesse',
                    'Développeur Web' => 'Développeur Web',
                    'Création application mobile' => 'Création application mobile',
                    'Maintenance informatique (Software)' => 'Maintenance informatique (Software)',
                    'Graphiste' => 'Graphiste',
                    'Déménagement' => 'Déménagement',
                    'Réparation/Mécanicien voiture' => 'Réparation/Mécanicien voiture',
                    'Réparation moto' => 'Réparation moto',
                    'Lavage auto' => 'Lavage auto',
                    'Electricien Auto' => 'Electricien Auto',
                    'Jardinier' => 'Jardinier',
                    'Préparation Gâteau' => 'Préparation Gâteau',
                    'Restauration chez l’habitant' => 'Restauration chez l’habitant',
                    'Boulanger' => 'Boulanger'
                ],])
            ->add('search', SubmitType::class);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => VillesFranceFree::class,
        ]);
    }
}
