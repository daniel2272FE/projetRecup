<?php

namespace App\Form;

use App\Entity\Compteur;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CompteurType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('numCompteur')
            ->add('serie')
            ->add('marque')
            ->add('typeCompteur')
            ->add('indexCompteur')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Compteur::class,
        ]);
    }
}
