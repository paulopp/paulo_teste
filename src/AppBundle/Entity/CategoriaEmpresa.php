<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Categoria
 *
 * @author paulo
 */
namespace ArcaSolutionsTeste\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Table(name="categoria_empresa")
 * @ORM\HasLifecycleCallbacks
 */
class CategoriaEmpresa
{
    /**
     * @var int
     *
     * @ORM\Id
     * @ORM\Column(type="smallint")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /** @ManyToOne(targetEntity="Categoria")
     *  @JoinColumn(name="id_categoria", referencedColumnName="id")
     */
    protected $categoria;    
    
    /** @ManyToOne(targetEntity="Empresa")
     *  @JoinColumn(name="id_empresa", referencedColumnName="id")
     */
    protected $empresa;    
    
    
    function getId() {
        return $this->id;
    }

    function getCategoria() {
        return $this->categoria;
    }

    function getEmpresa() {
        return $this->empresa;
    }

    function setCategoria($categoria) {
        $this->categoria = $categoria;
        return $this;
    }

    function setEmpresa($empresa) {
        $this->empresa = $empresa;
        return $this;
    }

}

?>