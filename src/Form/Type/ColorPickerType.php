<?php

namespace App\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\OptionsResolver\Options;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ColorPickerType extends AbstractType
{
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'acp-color' => "#EFE9E7",
            'acp-show-rgb' => "no",
            'acp-show-hsl' =>"yes",
            'acp-show-hex' =>"yes",
            'acp-show-alpha' => "yes",
            'compound'   => false,
            'attr' => [
                'class' => "picker"
            ]
        ]);

    }
    public function buildView(FormView $view, FormInterface $form, array $options)
    {
        $view->vars['acp-color'] = $options['acp-color'];
    }
}