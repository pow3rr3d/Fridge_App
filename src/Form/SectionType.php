<?php

namespace App\Form;

use App\Entity\Page;
use App\Entity\Section;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SectionType extends AbstractType
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
            ->add('content', CKEditorType::class, [
                'config' => [
                    'toolbar' => 'full'
                ]
            ])
            ->add('isActive')
            ->add('orderNb')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Section::class,
        ]);
    }
}
