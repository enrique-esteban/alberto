<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type as TYPE;

use AppBundle\Entity\ContactMail;

/**
 * Formulario para los correos de contacto.
 * 
 * @author Enrique José Esteban Plaza <ense.esteban@gmail.com>
 */
class ContactMailType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', @TYPE\TextType::class, array(
                'label' => 'Nombre'
            ))
            ->add('email', @TYPE\EmailType::class, array(
                'label' => 'E-mail'
            ))
            ->add('subject', @TYPE\TextType::class, array(
                'label' => 'Asunto'
            ))
            ->add('body', @TYPE\TextareaType::class, array(
                'label' => 'Mensaje' )
            )
            ->add('submit', @TYPE\SubmitType::class, array(
                'label' => 'Enviar'
            ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => ContactMail::class,
        ));
    }

    public function getBlockPrefix()
    {
        return 'contactMail';
    }
}