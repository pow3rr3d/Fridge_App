<?php

namespace App\Form;

use App\Entity\Page;
use App\Entity\Section;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PageType extends AbstractType
{
    private $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('path')
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
            ->add('sections', CollectionType::class, [
                'entry_type' => SectionType::class,
                'attr' => [
                    'data-allow-add' => true,
                    'data-allow-delete' => true,
                ],
                'entry_options' => [
                    'label' => false,
                    'attr' => [
                        'class' => 'section',
                    ],
                ],
                'allow_add' => true,
                'allow_delete' => true,
            ]);


        $builder->get('sections')->addEventListener(FormEvents::SUBMIT, function (FormEvent $event) {
            /** @var ArrayCollection $data */
            $data = $event->getData();
            $form = $event->getForm();
            $i = 1;

            /** @var Page $parentData */
            $parentData = $form->getParent()->getData();
            $data->map(function (Section $section) use ($parentData, &$i) {
                /** @var Section $foundSection */
                $foundSection = $this->em->getRepository(Section::class)->findOneBy([
                    'name' => $section->getName(),
                ]);

                if (null !== $foundSection) {
                    $foundSection->setPage($parentData);
                    $foundSection->setOrderNb($i++);

                    return $foundSection;
                }

                $section->setPage($parentData);
                $section->setOrderNb($i++);

                return $section;
            });

            $form->getParent()->setData($data);
        });
    }


    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Page::class,
        ]);
    }
}
