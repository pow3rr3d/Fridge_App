<?php

namespace App\Form;

use App\Entity\Page;
use App\Entity\Slider;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SliderType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('page', EntityType::class, [
                'label' => 'Page Name',
                'class' => Page::class,
                'choice_label' => 'name',
                'multiple' => false,
                'choice_value' => function (Page $entity = null)
                {
                    return $entity ? $entity->getId() : '';
                }])
            ->add('imageFile1', FileType::class)
            ->add('imageFile2', FileType::class, [
                'required' => false
            ] )
            ->add('imageFile3', FileType::class, [
                'required' => false
            ] )
            ->add('isActive', CheckboxType::class, [
                'row_attr' => [
                    'class' => 'custom-control custom-switch'
                ],
                'label_attr' => [
                    'class' => 'custom-control-label',
                    'for' => 'content_isActive'
                ],
                'attr' => [
                    'class' => "custom-control-input",
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Slider::class,
        ]);
    }
}
