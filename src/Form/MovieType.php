<?php

namespace App\Form;

use App\Entity\Actor;
use App\Entity\Director;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use App\Entity\Movie;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MovieType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('year')
            ->add('link')
            ->add('director', EntityType::class, [
                'class' => Director::class,
                'choice_label' => 'name'
            ])
            ->add('actors', EntityType::class, array(
                'class' => Actor::class,
                'choice_label' => 'name',
                'multiple' => true,
                'expanded' => true
              ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Movie::class,
        ]);
    }
}
