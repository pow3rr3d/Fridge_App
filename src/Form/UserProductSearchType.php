<?php

namespace App\Form;

use App\Entity\Product;
use App\Entity\ProductSearch;
use App\Entity\UserProduct;
use App\Entity\UserProductSearch;
use phpDocumentor\Reflection\Types\String_;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserProductSearchType extends AbstractType

        {
    public function buildForm(FormBuilderInterface $builder, array $options)
{
    $builder
        ->add('name', TextType::class, [
            'required' => false,
            'label' => false,
            'attr' => [
                'placeholder' => 'Product Name'
            ]
        ])
    ;
}

    public function configureOptions(OptionsResolver $resolver)
{
    $resolver->setDefaults([
        'data_class' => UserProductSearch::class,
        'method' => 'get',
        'csrf_protection' => false
    ]);
}

    public function getBlockPrefix()
{
    return "";
}

}