<?php

namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EmpresaSearchType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titulo',null,array(
                'required' => false,
            ))
            ->add('endereco',null,array(
                'required' => false,
            ))
            ->add('cep',null,array(
                'required' => false,
            ))
            ->add('cidade',null,array(
                'required' => false,
            ))
            ->add('categoria',null,array(
                'required' => false,
            ))
            ->add('search','submit')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        parent::setDefaultOptions($resolver);
        $resolver->setDefaults(array(
            // avoid to pass the csrf token in the url (but it's not protected anymore)
            'csrf_protection' => false,
            'data_class' => 'ArcaSolutionsTeste\AppBundle\Model\EmpresaSearch'
        ));
    }

    public function getProcura()
    {
        return 'empresa_search_type';
    }
    
    
}

?>

