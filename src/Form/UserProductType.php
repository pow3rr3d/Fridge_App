<?php

namespace App\Form;


use App\Entity\Product;
use App\Entity\User;
use App\Entity\UserProduct;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserProductType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('product', EntityType::class, [
                'attr' => [
                    'class' => 'consoNb custom-select'
                ],
                'label' => 'Product Name',
                'class' => Product::class,
                'choice_label' => 'name',
                'multiple' => false,
                'choice_value' => function (Product $entity = null) {
                    return $entity ? $entity->getId() : '';
                }])
            ->add('stockReel', IntegerType::class, [
                'label' => 'Stock Réel',
                'empty_data' => 0,
                'attr' => [
                    'step' => 1,
                    'min' => 0,
                    'class' => 'consoNb '
                ]
            ])
            ->add('stockOpti', IntegerType::class, [
                'label' => 'Stock Optimal',
                'required' => true,
                'attr' => [
                    'step' => 1,
                    'min' => 0,
                    'class' => 'consoNb '
                ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => UserProduct::class,
        ]);
    }
}

