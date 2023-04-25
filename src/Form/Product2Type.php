<?php

namespace App\Form;

use App\Entity\Product;
use App\Entity\Categorie;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class Product2Type extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('price')
            ->add('description')
            ->add('image')
            ->add('name')
            ->add('quantity')
            ->add('Categorie')
            ->add('Categorie',EntityType::class,['class' =>Categorie::class,
            "choice_label"=>'nomCategorie'])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Product::class,
        ]);
    }
}
