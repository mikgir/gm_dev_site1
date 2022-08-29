<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, array(
                'label'=>'Name',
                'attr'=>array(
                    'class'=>'form-control'
                )
            ))
            ->add('email', EmailType::class, array(
                'label'=>'Email',
                'attr'=>array(
                    'class'=>'form-control'
                )
            ))
            ->add('plainPassword', RepeatedType::class, array(
                'type' => PasswordType::class,
                'first_options' => array(
                    'label' => 'Password',
                    'attr'=>array(
                        'class'=>'form-control'
                    )
                ),
                'second_options' => array(
                    'label' => 'Repeat password',
                    'attr'=>array(
                        'class'=>'form-control'
                    )
                )
            ))
            ->add('submit', SubmitType::class, array(
                'label'=>'Register',
                'attr'=>array(
                    'class'=>'btn btn-outline-secondary custom__btn clay'
                )
            ));
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
