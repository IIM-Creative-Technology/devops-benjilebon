<?php

namespace App\Form;

use App\Entity\Meta;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class MetaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Title', TextType::class, [
                'label' => 'Titre du site',
                'constraints' => [
                    new Length([
                        'min' => 3,
                        'max' => 65,
                        'maxMessage' => 'Le titre ne doit pas exceder les 65 caractères pour être correctement référencé'
                    ]),
                    new NotBlank([
                        'message' => 'Merci de remplir ce champs'
                    ])

                ]
            ])
            ->add('Description', TextType::class, [
                'label' => 'Meta Description',
                'constraints' => [
                    new Length([
                        'min' => 3,
                        'max' => 160,
                        'maxMessage' => 'La description ne doit pas exceder 160 caractères pour le référencement'
                    ]),
                    new NotBlank([
                        'message' => 'Merci de remplir ce champs'
                    ])

                ]
            ])
            ->add('ogtitle', TextType::class, [
                'label' => 'Meta OpenGraph Title',
                'constraints' => [
                    new NotBlank([
                        'message' => 'Merci de remplir ce champs'
                    ])

                ]
            ])
            ->add('ogurl', TextType::class, [
                'label' => 'Meta OpenGraph URL du site',
                'constraints' => [
                    new NotBlank([
                        'message' => 'Merci de remplir ce champs'
                    ])

                ]
            ])
            ->add('ogimage', TextType::class, [
                'label' => 'Meta OpenGraph URL image du site',
                'constraints' => [
                    new NotBlank([
                        'message' => 'Merci de remplir ce champs'
                    ])

                ]
            ])
            ->add('ogdescription', TextType::class, [
                'label' => 'Meta OpenGraph Description du site',
                'constraints' => [
                    new NotBlank([
                        'message' => 'Merci de remplir ce champs'
                    ])

                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Meta::class,
        ]);
    }
}
