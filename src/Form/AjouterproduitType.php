<?php

namespace App\Form;

use App\Entity\Produit;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Positive;

class AjouterproduitType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class,['empty_data'=>''])
            ->add('description' , TextType::class,['empty_data'=>''])
            ->add('marque' , TextType::class,['empty_data'=>''])
            ->add('prix' , MoneyType::class,['empty_data'=>'Money'])
            ->add('etat', ChoiceType::class, [
                'choices' => [
                    'Neuf' => 'Neuf',
                    'Comme Neuf' => 'Comme Neuf',
                    'Utilisé' => 'Utilisé',
                ],
                'placeholder' => 'Choisir un état', 
                'empty_data'=>'Choice'
                
            ])
            ->add('image', FileType::class, [
                'required' => false,
                'label' => 'Image',
                'data_class' => null, 
                'attr' => ['accept' => '.jpg,.jpeg,.png'],
                'empty_data'=>'' 
            ])
            ->add('type' , ChoiceType::class, [
                'choices' => [
                    'pull' => 'pull',
                    'veste' => 'veste',
                    'pantalon' => 'pantalon',
                    'chaussure' => 'chaussure',
                ],
                'placeholder' => 'Choisir un type', 
                'empty_data'=>'Choice'
            ])
            ->add('taille', ChoiceType::class, [
                'choices' => [
                    'XS' => 'XS',
                    'S' => 'S',
                    'M' => 'M',
                    'L' => 'L',
                    'XL' => 'XL',
                    'XXL' => 'XXL',
                ],
                'placeholder' => 'Choisir taille', 
                'empty_data'=>'Choice'
            ])
            ->add('ajouter' , SubmitType::class)
    
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Produit::class,
        ]);
    }
}
