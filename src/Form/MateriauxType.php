<?php

namespace App\Form;

use App\Entity\Materiaux;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use DateTime;
use Symfony\Component\Form\FormEvents;
use App\Form\FormEvent;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Validator\Constraints\NotBlank;




class MateriauxType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void    {
        $builder
        ->add('type', ChoiceType::class, [
            'choices' => [
                'Metal' => 'Metal',
                'Plastique' => 'Plastique',
                'verre' => 'verre',
                'coton' => 'coton',

            ],
        ])
        ->add('taux', HiddenType::class, [
            'data' => 1.5, 
        ])
        ->add('duree', HiddenType::class, [
            'data' => 10, 
        ])
        ->add('poids', TextType::class, [
            'mapped' => false,
            'label' => 'Poids',
            'attr' => ['class' => 'form-control'],
            'constraints' => [
                new NotBlank([
                    'message' => 'Le champ poids ne peut pas être vide',
                ]),
            ],
        ])
           
            ->add('Date', DateType::class, [
                'mapped' => false,
                'widget' => 'single_text',
                'label' => 'Date',
                'attr' => ['class' => 'form-control']
            ])         
            ->add('conditionUt', ChoiceType::class, [
                'choices' => [
                    'Réutilisable' => 'Réutilisable',
                    'Usage unique' => 'Usage unique',
                    
                ],
            ])
            ->add('name', TextType::class, [
                
                'mapped' => false,
                'label' => false

            ]);
        
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Materiaux::class,
        ]);
    }
}
