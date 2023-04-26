<?php

namespace App\Form;


use App\Entity\Equipe;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class EquipeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('ville', EntityType::class, [
                'required' => true,
                'label' => 'Choisir une ville',
                'class' => Equipe::class,
                'choice_label' => 'name',
                'constraints' => [
                  new NotBlank([
                    'message' => 'Veuillez choisir une ville'
                  ])
                ]
              ])
            ->add('ville')
            ->add('budget')
            ->add('renommee')
            ->add('save', SubmitType::class)
            
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Equipe::class,
        ]);
    }
}
