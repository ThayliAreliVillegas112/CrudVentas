<?php

namespace App\Form;

use App\Entity\Payments;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class PaymentsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('checknumber', NumberType::class, [
                'label' => 'verificacion',
                'attr' => [
                    'placeholder' => 'verificacion',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => true
                ]
            ])
            ->add('paymentdate', DateType::class, [
                'label' => 'fechaPago',
                'attr' => [
                    'placeholder' => 'fechaPago',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => true
                ]
            ])
            ->add('amount', NumberType::class, [
                'label' => 'Monto',
                'attr' => [
                    'placeholder' => 'Monto',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => true
                ]
            ])
            ->add('customernumber')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Payments::class,
        ]);
    }
}
