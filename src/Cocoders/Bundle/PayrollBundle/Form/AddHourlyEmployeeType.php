<?php

namespace Cocoders\Bundle\PayrollBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AddHourlyEmployeeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', 'text')
            ->add('address', 'text')
            ->add('hourlyRate', 'integer')
            ->add('save', 'submit')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
                'data_class' => 'UseCase\AddEmployee\AddHourlyEmployeeRequest',
            ));
    }

    public function getName()
    {
        return 'payroll_add_hourly_employee_type';
    }
}
