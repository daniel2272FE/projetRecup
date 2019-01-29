<?php

namespace App\Form;

use App\Entity\Abonne;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AbonneType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('prenom')
            ->add('adresse')
            ->add('cin')
            ->add('dateCin')
            ->add('lieuCin')
            ->add('profession')
            ->add('telephone')
            ->add('referenceClient')
            ->add('refEnc')
            ->add('categories', EntityType::class, [
                'class' => 'App\Entity\Categorie',
                'choice_label' => 'libelleCategorie'
            ])
            ->add('tarifs', EntityType::class, [
                'class' => 'App\Entity\Tarif',
                'choice_label' => 'designation'
            ])
            ->add('compteurs', EntityType::class, [
                'class' => 'App\Entity\Compteur',
                'choice_label' => 'numCompteur'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Abonne::class,
        ]);
    }
}
