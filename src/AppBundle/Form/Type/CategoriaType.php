<?php

namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CategoriaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options = [])
    {
        $builder
            ->setMethod($options['method'])
            ->setAction($options['action'])
            ->add('descricao', 'text', ['required' => false, 'error_bubbling' => true]);
    }

    public function getDescricao()
    {
        return 'categoria';
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(
            ['data_class' => 'ArcaSolutionsTeste\AppBundle\Entity\Categoria']
        );
    }
}

?>

