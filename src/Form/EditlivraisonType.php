<?php

namespace App\Form;

use App\Entity\Commande;
use App\Entity\Livraison;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EditlivraisonType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('numliv',TextType::class,['empty_data'=>''])
            ->add('idcommande', EntityType::class, [
                'class' => Commande::class,
                'choice_label' => 'idcommande',
                'multiple' => true,
                'expanded' => true,
            ])
            ->add('zoneliv',TextType::class,['empty_data'=>''])
            ->add('dateliv', DateType::class, [
                'widget' => 'single_text',
                'empty_data' => null,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'dateliv',
                ],
            ])
            ->add('idlivreur')
            ->add('etatliv', ChoiceType::class, [
                'choices' => [
                    'Non Livrée' => 'Non Livrée',
                    'En cours d\'expedition' => 'En cours d\'expedition',
                    'Expediée' => 'Expediée',
                    'En cours de livraison' => 'En cours de livraison',
                ],
                'placeholder' => 'Choose an option', // Optional placeholder
                'required' => true, // Set to true if this field is mandatory
            ])
            ->add('submit',SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Livraison::class,
        ]);
    }
}
