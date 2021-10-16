<?php

namespace App\Form;

use App\Entity\Employees;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;

class EmployeesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('lastname', TextType::class, [
            'label' => 'lastname',
            'attr' => [
                'placeholder' => 'lastname',
                'autocomplete' => 'off',
                'class' => 'form-control',
                'required' => true
            ]
        ])
        ->add('firstname', TextType::class, [
            'label' => 'firstname',
            'attr' => [
                'placeholder' => 'firstname',
                'autocomplete' => 'off',
                'class' => 'form-control',
                'required' => true
            ]
        ])
        ->add('extension', NumberType::class, [
            'label' => 'extension',
            'attr' => [
                'placeholder' => 'extension',
                'autocomplete' => 'off',
                'class' => 'form-control',
                'required' => true
            ]
        ])
        ->add('email', EmailType::class, [
            'label' => 'email',
            'attr' => [
                'placeholder' => 'email',
                'autocomplete' => 'off',
                'class' => 'form-control',
                'required' => true
            ]
        ])
        ->add('jobtitle', TextType::class, [
            'label' => 'jobtitle',
            'attr' => [
                'placeholder' => 'jobtitle',
                'autocomplete' => 'off',
                'class' => 'form-control',
                'required' => true
            ]
        ])
            ->add('reportsto')
            ->add('officecode')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Employees::class,
        ]);
    }
}
