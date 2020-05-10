<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class CvContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Name', null, array('label' => false, 'attr' => ['class' =>'form-control']))
            // ->add('Email', null, array('label' => false, 'attr' => ['class' =>'form-control']))
            ->add('Email', EmailType::class , array(
                'attr'=> 
                    array(
                        'placeholder'=>'Email',
                        'class' => 'form-control'
                        ) ,
                    'label' => false,
                    ))
            ->add('Subject', null, array('label' => false, 'attr' => ['class' =>'form-control']))
            ->add('Message', TextareaType::class , array(
                'attr'=> 
                    array(
                        'placeholder'=>'Votre message',
                        'class' => 'form-control'
                        ) ,
                    'label' => false,
                )
            )
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
