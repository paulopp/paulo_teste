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
 * @ORM\Table(name="categoria")
 * @UniqueEntity(fields="descricao", message="Categoria já existe")
 * @ORM\HasLifecycleCallbacks
 */
class Categoria
{
    /**
     * @var int
     *
     * @ORM\Id
     * @ORM\Column(type="smallint")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=100, unique=true)
     * @Assert\NotBlank(message="Descrição é obrigatória")
     * @Assert\Regex(pattern="/^[A-Z]{2}$/",
     *  message="Erro ao informar a descrição."
     * )
     */
    protected $descricao;
    
    /** @OneToMany(targetEntity="CategoriaEmpresa", mappedBy="empresa") */
    protected $categoriaEmpresa;
    
    /** @ManyToOne(targetEntity="Empresa") */
    protected $empresa;
    
    public function __construct(Empresa $empresa)
    {
        $this->empresa = $empresa;
        $this->categoriaEmpresa = new ArrayCollection();
    }
    
    
    function getId() {
        return $this->id;
    }

    function getDescricao() {
        return $this->descricao;
    }
    
    function setDescricao($descricao) {
        $this->descricao = $descricao;
        return $this;
    }
    
    function getCategoriaEmpresa() {
        return $this->categoriaEmpresa;
    }

    function setCategoriaEmpresa($categoriaEmpresa) {
        $this->categoriaEmpresa = $categoriaEmpresa;
        return $this;
    }
    
    function getEmpresa() {
        return $this->empresa;
    }

    function setEmpresa($empresa) {
        $this->empresa = $empresa;
    }



}

?>