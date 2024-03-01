<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Doctrine\Common\Util\ClassUtils;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CreecompteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class,['empty_data'=>''])
            ->add('prenom', TextType::class,['empty_data'=>''])
            ->add('num', NumberType::class,['empty_data'=>''])
            ->add('adresse', TextType::class,['empty_data'=>''])
            ->add('stat', HiddenType::class, [
                'data' => 'user',
            ])
            ->add('token', HiddenType::class, [
                'data' => null,
            ])
            ->add('mail', EmailType::class,['empty_data'=>''])
            ->add('mdp', PasswordType::class,['empty_data'=>''])
            ->add('confirmMdp', PasswordType::class, ['mapped' => false, 'empty_data' => ''])
            ->add('image', HiddenType::class)
            ->add('submit', SubmitType::class, [
                'label' => 'S\'inscrire',
                'attr' => [
                    'placeholder' => 'S\'inscrire',
                ],
            ]);
    }
    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
