<?php

namespace App\Form;

use App\Entity\Commande;
use App\Entity\Livraison;
use App\Entity\Livreur;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AddEditLivraisonType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('numliv',TextType::class,['empty_data'=>''])
            ->add('zoneliv',TextType::class,['empty_data'=>''])
            ->add('dateliv', DateType::class, [
                'widget' => 'single_text',
                'empty_data' => null,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'dateliv',
                ],
            ])
            ->add('etatliv', HiddenType::class, [
                'data' => 'Non Livrée',
            ])
            ->add('idlivreur', EntityType::class, [
                'class' => Livreur::class,
                'choice_label' => 'idlivreur',
            ])
            ->add('idcommande', EntityType::class, [
                'class' => Commande::class,
                'choice_label' => 'idcommande',
                'multiple' => true, // Permettre la sélection multiple
                'attr' => [
                    'class' => 'select2', // Ajouter la classe 'select2' pour initialiser Select2 via JavaScript
                ],
                'expanded' => true,
                ])
            
            ->add('submit', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Livraison::class,
        ]);
    }
}
