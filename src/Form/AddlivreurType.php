<?php

namespace App\Form;

use App\Entity\Livreur;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AddlivreurType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('idlivreur',TextType::class)
            ->add('nom',TextType::class)
            ->add('prenom',TextType::class)
            ->add('email',EmailType::class)
            ->add('numtel',NumberType::class)
            ->add('vehicule', ChoiceType::class, [
                'choices' => [
                    'Moto' => 'moto',
                    'Voiture' => 'voiture',
                    'Fourgon' => 'fourgon',
                ],
                'placeholder' => 'Choose an option', // Optional placeholder
                'required' => true, // Set to true if this field is mandatory
            ])

            ->add('disponibilite', ChoiceType::class, [
                'choices' => [
                    '8h->12h' => '8h->12h',
                    '12h->16h' => '12h->16h',
                    '16h->20h' => '16h->20h',
                ],
                'placeholder' => 'Choose an option', // Optional placeholder
                'required' => true, // Set to true if this field is mandatory
            ])
            ->add('zonelivraison',TextType::class)
            ->add('image', FileType::class, [
                'required' => false,
                'label' => 'Image',
                'data_class' => null, // Set data_class to null
                'attr' => ['accept' => '.jpg,.jpeg,.png'],
            ])
            ->add('statut', HiddenType::class, [
                'data' => 'active',
            ])
            ->add('submit',SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Livreur::class,
        ]);
    }
}
