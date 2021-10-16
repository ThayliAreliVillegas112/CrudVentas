<?php

namespace App\Form;

use App\Entity\Customers;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;

class CustomersType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        
        ->add('customername', TextType::class, [
            'label' => 'Nombre',
            'attr' => [
                'placeholder' => 'Nombre',
                'autocomplete' => 'off',
                'class' => 'form-control',
                'required' => true
            ]
        ])
        ->add('contactlastname', TextType::class, [
            'label' => 'Apellido 2',
            'attr' => [
                'placeholder' => 'Apellido 2',
                'autocomplete' => 'off',
                'class' => 'form-control',
                'required' => true
            ]
        ])
            ->add('contactfirstname', TextType::class, [
                'label' => 'Apellido 1',
                'attr' => [
                    'placeholder' => 'Apellido 1',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => true
                ]
            ])
            ->add('phone', TextType::class, [
                'label' => 'telefono',
                'attr' => [
                    'placeholder' => 'telefono',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => true
                ]
            ])
            ->add('addressline1', TextType::class, [
                'label' => 'Dirección 1',
                'attr' => [
                    'placeholder' => 'Dirección 1',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => true
                ]
            ])
            ->add('addressline2', TextType::class, [
                'label' => 'Dirección 2',
                'attr' => [
                    'placeholder' => 'Dirección 2',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => true
                ]
            ])
            ->add('city', TextType::class, [
                'label' => 'Ciudad',
                'attr' => [
                    'placeholder' => 'Ciudad',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => true
                ]
            ])
            ->add('state', TextType::class, [
                'label' => 'Estado',
                'attr' => [
                    'placeholder' => 'Estado',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => true
                ]
            ])
            ->add('postalcode', NumberType::class, [
                'label' => 'Código postal',
                'attr' => [
                    'placeholder' => 'Código postal',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => true
                ]
            ])
            ->add('country', TextType::class, [
                'label' => 'País',
                'attr' => [
                    'placeholder' => 'País',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => true
                ]
            ])
            ->add('creditlimit', NumberType::class, [
                'label' => 'Credit limit',
                'attr' => [
                    'placeholder' => 'Credit limit',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => true
                ]
            ])
            ->add('salesrepemployeenumber', NumberType::class, [
                'label' => 'Sales Rep Employeenumber',
                'attr' => [
                    'placeholder' => 'Sales Rep Employeenumber',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => true
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Customers::class,
        ]);
    }
}
