<?php

namespace CCICommunity\ConseilBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AdressesType extends AbstractType
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
            ->add('image')
            ->add('auteur')
            ->add('date')
            ->add('note')
            ->add('adresse')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'CCICommunity\ConseilBundle\Entity\Adresses'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ccicommunity_conseilbundle_adresses';
    }
}
