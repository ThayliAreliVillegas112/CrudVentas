<?php

namespace App\Form;

use App\Entity\Offices;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\TextType;
# use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;

class OfficesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('city', TextType::class, [
                'label' => 'Ciudad',
                'attr' => [
                    'placeholder' => 'Ciudad',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => true
                ]
            ])
            ->add('phone', TextType::class, [
                'label' => 'Teléfono',
                'attr' => [
                    'placeholder' => 'Teléfono',
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
            ->add('state', TextType::class, [
                'label' => 'Estado',
                'attr' => [
                    'placeholder' => 'Estado',
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
            ->add('postalcode', NumberType::class, [
                'label' => 'Código postal',
                'attr' => [
                    'placeholder' => 'Código postal',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => true
                ]
            ])
            ->add('territory', TextType::class, [
                'label' => 'Territorio',
                'attr' => [
                    'placeholder' => 'Territorio',
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
            'data_class' => Offices::class,
        ]);
    }
}
