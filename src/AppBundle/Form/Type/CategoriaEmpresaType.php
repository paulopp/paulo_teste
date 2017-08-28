<?php

namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CategoriaEmpresaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options = [])
    {
        $builder
            ->setMethod($options['method'])
            ->setAction($options['action']);
    }

   /**
    * @param OptionsResolver $resolver
    */
   public function configureOptions(OptionsResolver $resolver)
   {
       $resolver->setDefaults([
           'class' => 'AppBundle\Entity\CategoriaEmpresa',
           'choice_label' => 'empresaNome',
           'expanded' => true,
           'multiple' => true,
       ]);
   }

   public function getParent()
   {
       return EntityType::class;
   }

}

?>

