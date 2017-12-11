<?php

namespace AppBundle\Form;

use Ivory\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\PercentType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


/**
 * Formulario para los correos de contacto.
 *
 * @author Enrique José Esteban Plaza <ense.esteban@gmail.com>
 */
class ItemType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array                $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name', TextType::class);
        $builder->add('description', CKEditorType::class);
        $builder->add('quantity', IntegerType::class, array (
            'attr' => array (
                'min' => 1,
                'max' => 100,
            )
        ));
        $builder->add('cost', MoneyType::class);
        $builder->add('advance', MoneyType::class);
        $builder->add('discount', PercentType::class, array (
            'type' => 'integer',
        ));
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Item',
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'appbundle_item';
    }
}