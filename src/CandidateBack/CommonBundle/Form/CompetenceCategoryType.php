<?php

namespace CandidateBack\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CompetenceCategoryType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', TextType::class, [
                'label' => 'Titre',
                'required' => true
            ])
            ->add('showOrder', IntegerType::class, [
                'label' => 'Ordre apparation',
                'required' => false
            ])
            ->add('isPublished', CheckboxType::class, [
                'label' => 'Actif',
                'required' => false
            ])
            ->add('save', SubmitType::class, [
                'label' => 'Enregistrer',
                'attr' => [
                    'class' => 'btn btn-primary'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => 'CandidateBack\CommonBundle\Entity\CompetenceCategory'
        ]);
    }

    public function getBlockPrefix()
    {
        return 'candidate_manager_admin_bundle_competence_category_type';
    }
}

