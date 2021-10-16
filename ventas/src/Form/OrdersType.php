<?php

namespace App\Form;

use App\Entity\Orders;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;

class OrdersType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('orderdate', DateType::class, [
                'label' => 'Fecha de orden',
                'attr' => [
                    'placeholder' => 'Fecha de orden',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => true
                ]
            ])
            ->add('requireddate', DateType::class, [
                'label' => 'Fecha requerida',
                'attr' => [
                    'placeholder' => 'Fecha requerida',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => true
                ]
            ])
            ->add('shippeddate', DateType::class, [
                'label' => 'Fecha de envío',
                'attr' => [
                    'placeholder' => 'Fecha de envío',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => true
                ]
            ])
            ->add('status', DateType::class, [
                'label' => 'Estado',
                'attr' => [
                    'placeholder' => 'Estado',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => true
                ]
            ])
            ->add('comments', TextType::class, [
                'label' => 'Comentarios',
                'attr' => [
                    'placeholder' => 'Comentarios',
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
            'data_class' => Orders::class,
        ]);
    }
}
