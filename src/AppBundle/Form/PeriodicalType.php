<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PeriodicalType extends PublicationType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        parent::buildForm($builder, $options);
        $builder->add('runDates', null, array(
            'label' => 'Run Dates',
            'required' => false,
            'attr' => array(
                'help_block' => '',
            ),
        ));
        $builder->add('continuedFrom', null, array(
            'label' => 'Continued From',
            'required' => false,
            'attr' => array(
                'help_block' => '',
            ),
        ));
        $builder->add('continuedBy', null, array(
            'label' => 'Continued By',
            'required' => false,
            'attr' => array(
                'help_block' => '',
            ),
        ));
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Periodical'
        ));
    }

}