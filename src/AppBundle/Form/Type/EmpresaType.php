<?php

namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EmpresaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options = [])
    {
        $builder
            ->setMethod($options['method'])
            ->setAction($options['action'])
            ->add('titulo', 'text', ['required' => true, 'error_bubbling' => true])    
            ->add('telefone', 'text', ['required' => true, 'error_bubbling' => true])    
            ->add('endereco', 'text', ['required' => true, 'error_bubbling' => true])    
            ->add('cep', 'text', ['required' => true, 'error_bubbling' => true])    
            ->add('cidade', 'text', ['required' => true, 'error_bubbling' => true])    
            ->add('estado', 'text', ['required' => true, 'error_bubbling' => true]) 
            
            //->add("categoriasEmpresas", CategoriaEmpresaType::class)   
                
            ->add('categorias','entity',array(
                  'class'       => \ArcaSolutionsTeste\AppBundle\Entity\Categoria::class,
                  'label'       => 'form.categorias',
                  'multiple'    => true))    

            ->add('descricao', 'text', ['required' => false, 'error_bubbling' => true]);
    }

    public function getTitulo()
    {
        return 'empresa';
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults( 
            ['data_class' => 'ArcaSolutionsTeste\AppBundle\Entity\Empresa']
        );
    }
}

?>

