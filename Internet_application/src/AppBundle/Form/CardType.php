<?php

namespace AppBundle\Form;

use AppBundle\Entity\Cards;
use AppBundle\Entity\Workers;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CardType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('cardId', TextType::class, [
                'label' => 'LC_CardId',
                'attr' => [
                    'placeholder' => 'ID Karty',
                    'readonly' => 'readonly'
                ]
        ])
            ->add('accessLevel', NumberType::class, [
                'label' => 'LC_AccessLever',
                'attr' => [
                    'placeholder' => 'Poziom Dostępu',
                ]
            ])
            ->add('worker', EntityType::class, [
                'class' => Workers::class,
                'choice_label' => function($workers) { return $workers->getFirstName() . ' ' . $workers->getLastName(); },
                'label' => 'LC_Worker',
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'LC_Submit',
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
                "data_class" => Cards::class,
            ]
        );
    }

    public function getBlockPrefix()
    {
        return 'rfid';
    }
}
