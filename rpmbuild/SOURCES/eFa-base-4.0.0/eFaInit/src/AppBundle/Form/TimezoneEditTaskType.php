<?php
// src/AppBundle/Form/LanguageTaskType.php

namespace AppBundle\Form;

use AppBundle\Entity\eFaInitTask;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TimezoneType;

class TimezoneEditTaskType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Timezone', TimezoneType::class, array(
                'preferred_choices' => array($options['varData']),
                'expanded' => false,
                'multiple' => false,
                ))
            ->add('Save', SubmitType::class)
        ;
    }
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => eFaInitTask::class,
            'csrf_token_id' => 'timezone_task'
        ));
        $resolver->setRequired('varData');
    }
}
?>
