<?php

namespace App\Form;

use App\Entity\Products;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;

class ProductsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('productname', TextType::class, [
            'label' => 'Nombre producto',
            'attr' => [
                'placeholder' => 'Nombre producto',
                'autocomplete' => 'off',
                'class' => 'form-control',
                'required' => true
            ]
        ])
        ->add('productscale', TextType::class, [
            'label' => 'Escala producto',
            'attr' => [
                'placeholder' => 'Escala producto',
                'autocomplete' => 'off',
                'class' => 'form-control',
                'required' => true
            ]
        ])
        ->add('productvendor', TextType::class, [
            'label' => 'Vendedor de productos',
            'attr' => [
                'placeholder' => 'Vendedor de productos',
                'autocomplete' => 'off',
                'class' => 'form-control',
                'required' => true
            ]
        ])
        ->add('productdescription', TextType::class, [
            'label' => 'Descripcion del producto',
            'attr' => [
                'placeholder' => 'Descripcion del producto',
                'autocomplete' => 'off',
                'class' => 'form-control',
                'required' => true
            ]
        ])
        ->add('quantityinstock', NumberType::class, [
            'label' => 'Cantidad en stock',
            'attr' => [
                'placeholder' => 'Cantidad en stock',
                'autocomplete' => 'off',
                'class' => 'form-control',
                'required' => true
            ]
        ])
        ->add('buyprice', TextType::class, [
            'label' => 'Precio de compra',
            'attr' => [
                'placeholder' => 'Precio de compra',
                'autocomplete' => 'off',
                'class' => 'form-control',
                'required' => true
            ]
        ])
        ->add('msrp', TextType::class, [
            'label' => 'msrp',
            'attr' => [
                'placeholder' => 'msrp',
                'autocomplete' => 'off',
                'class' => 'form-control',
                'required' => true
            ]
        ])
            ->add('productline')
            ->add('ordernumber')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Products::class,
        ]);
    }
}
