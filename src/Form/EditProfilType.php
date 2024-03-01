<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EditProfilType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom' ,TextType::class,['empty_data'=>''])
            ->add('prenom',TextType::class,['empty_data'=>''])
            ->add('num',NumberType::class,['empty_data'=>''])
            ->add('adresse',TextType::class,['empty_data'=>''])
            ->add('stat', HiddenType::class)
            ->add('mail' , HiddenType::class)
            ->add('mdp' , HiddenType::class)
            ->add('image', HiddenType::class)
            ->add('submit' , SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
