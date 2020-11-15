<?php

namespace App\Form\Extension;

use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TextareaTypeExtension extends AbstractTypeExtension
{
    /**
     * Return the class of the type being extended.
     */
    public static function getExtendedTypes(): iterable
    {
// return FormType::class to modify (nearly) every field in the system
        return [TextareaType::class];
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        // makes it legal for FileType fields to have an image_property option
        $resolver->setDefined(['is']);
        $resolver->setDefaults(['is' => 'rich-text']);
    }

    public function buildView(FormView $view, FormInterface $form, array $options)
    {
        if (isset($options['is']) && $options['is']) {
            $view->vars['attr']['is'] = $options['is'];
        }
    }
}