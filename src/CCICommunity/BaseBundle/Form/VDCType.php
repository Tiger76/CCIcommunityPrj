<?php

namespace CCICommunity\BaseBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class VDCType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre')
            ->add('texte')
            ->add('file', 'file', array('label'  => 'Image'))
            ->add('auteur')
            ->add('date')
            ->add('promo')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'CCICommunity\BaseBundle\Entity\VDC'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ccicommunity_basebundle_vdc';
    }
}
