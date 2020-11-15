<?php

namespace App\Form;

use App\Entity\Content;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('content', TextareaType::class)
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
                    'id' => "customSwitch1"
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Content::class,
        ]);
    }
}
