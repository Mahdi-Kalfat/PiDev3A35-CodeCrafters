<?php

namespace App\Form;

use App\Entity\Commande;
use App\Entity\Produit;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;

class AjoutercommandeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('adresse', TextType::class, ['empty_data' => ''])
            ->add('paiement', ChoiceType::class, [
                'choices' => [
                    'carte bancaire' => 'carte bancaire',
                    'espece' => 'espece',
                ],
                'placeholder' => 'Ajoute une méthode de paiement',
                'required' => true,
                'empty_data' => 'Choice'
            ])
            ->add('codepostal', NumberType::class, ['empty_data' => 'Number'])
            ->add('nom_entreprise', TextType::class)
            ->add('numero', NumberType::class, ['empty_data' => 'Number'])
            ->add('Valider', SubmitType::class);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Commande::class,
            'produitsChoices' => [],
        ]);
    }
}