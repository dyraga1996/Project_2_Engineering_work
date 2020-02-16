<?php
/**
 * Created by PhpStorm.
 * User: Norbert Orlikowski
 * Date: 25.07.2018
 * Time: 16:34
 */

namespace AppBundle\Form;



use AppBundle\Entity\Workers;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class WorkerType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstName', TextType::class, [
                "label" => "LC_FirstName"
            ])
            ->add('lastName', TextType::class, [
                "label" => "LC_LastName"
            ])
            ->add('jobTitle', TextType::class, [
                "label" => "LC_JobTitle",
                "attr" => [
                    "placeholder" => "Stanowisko"
                ]
            ])
            ->add('hiredAt', DateTimeType::class, [
                "label" => "LC_DateHired",
                'format' => 'yyyy-MM-dd',
                'widget' => 'single_text'
            ])
            ->add('hired', ChoiceType::class, [
                'choices' => [
                    'Tak' => 1,
                    "Nie" => 0
                ],
                'label' => "LC_Hired",

            ])
            ->add('submit', SubmitType::class, [
                "label" => "LC_Submit"
            ]);

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
                "data_class" => Workers::class,
            ]
        );

    }
}