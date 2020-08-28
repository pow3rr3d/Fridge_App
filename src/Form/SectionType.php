<?php

namespace App\Form;

use App\Entity\Page;
use App\Entity\Section;
use App\Form\Type\ColorPickerType;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ColorType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SectionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')

            ->add('color', ColorPickerType::class,[
                'label' => 'Background color',
            ])
            ->add('content', CKEditorType::class, [
                'config' => [
                    'toolbar' => 'full'
                ]
            ])
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
            'data_class' => Section::class,
        ]);
    }
}
