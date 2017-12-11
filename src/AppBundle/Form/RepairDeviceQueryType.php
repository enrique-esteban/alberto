<?php

namespace AppBundle\Form;

use AppBundle\Entity\Receipt;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\SubmitButton;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type as Type;

/**
 * Formulario para la consulta de dispositivos.
 * 
 * @author Enrique José Esteban Plaza <ense.esteban@gmail.com>
 */
class RepairDeviceQueryType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('code', @Type\TextType::class, array(
                'label' => 'Código'
            ))
            ->add('submit', @Type\SubmitType::class, array(
                'label' => 'Enviar',
                'attr' => array(
                    'class' => 'buttoncontact'
                )
            ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Receipt::class,
        ));
    }

    public function getBlockPrefix()
    {
        return 'ab-repair-query';
    }
}