<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Empresa
 *
 * @author paulo
 */
namespace ArcaSolutionsTeste\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Table(name="empresa")
 * @UniqueEntity(fields="titulo", message="Empresa já existe")
 * @Search(repositoryClass="ArcaSolutionsTeste\AppBundle\Entity\SearchRepository\EmpresaRepository")
 * @ORM\HasLifecycleCallbacks
 * @ORM\Entity(repositoryClass="ArcaSolutionsTeste\AppBundle\Entity\Repository\EmpresaRepository")
 */
class Empresa
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
     * @Assert\NotBlank(message="Titulo é obrigatório")
     * @Assert\Regex(pattern="/^[A-Z]{2}$/",
     *  message="Erro ao informar o Titulo."
     * )
     */
    protected $titulo;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=45, unique=true)
     * @Assert\NotBlank(message="Telefone é obrigatório")
     * @Assert\Regex(pattern="/^[A-Z]{2}$/",
     *  message="Erro ao informar o telefone."
     * )
     */
    protected $telefone;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=200, unique=true)
     * @Assert\NotBlank(message="Endereço é obrigatório")
     * @Assert\Regex(pattern="/^[A-Z]{2}$/",
     *  message="Erro ao informar o endereço."
     * )
     */
    protected $endereco;

    /**
     * @var int
     *
     * @ORM\Column(type="string", unique=false)
     * @Assert\NotBlank(message="CEP é obrigatório")
     * @Assert\Regex(pattern="/^[A-Z]{2}$/",
     *  message="Erro ao informar o CEP"
     * )
     */
    protected $cep;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=100, unique=true)
     * @Assert\NotBlank(message="Cidade é obrigatória")
     * @Assert\Regex(pattern="/^[A-Z]{2}$/",
     *  message="Erro ao informar a cidade."
     * )
     */
    protected $cidade;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=2, unique=true)
     * @Assert\NotBlank(message="Estado é obrigatório")
     * @Assert\Regex(pattern="/^[A-Z]{2}$/",
     *  message="Erro ao informar o estado."
     * )
     */
    protected $estado;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=300, unique=true)
     * @Assert\NotBlank(message="Descrição é obrigatória")
     * @Assert\Regex(pattern="/^[A-Z]{2}$/",
     *  message="Erro ao informar a descrição."
     * )
     */
    protected $descricao;
    
    /** @OneToMany(targetEntity="CategoriaEmpresa", mappedBy="categoria") */
    protected $categoriaEmpresa;
    
    /** @ManyToOne(targetEntity="Categoria") */
    protected $categoria;
    
    public function __construct(Categoria $categoria)
    {
        $this->categoria = $categoria;
        $this->categoriaEmpresa = new ArrayCollection();
    }
    

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
    
    function getTitulo() {
        return $this->titulo;
    }

    function getTelefone() {
        return $this->telefone;
    }

    function getEndereco() {
        return $this->endereco;
    }

    function getCep() {
        return $this->cep;
    }

    function getCidade() {
        return $this->cidade;
    }

    function getEstado() {
        return $this->estado;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
        return $this;
    }

    function setTelefone($telefone) {
        $this->telefone = $telefone;
        return $this;
    }

    function setEndereco($endereco) {
        $this->endereco = $endereco;
        return $this;
    }

    function setCep($cep) {
        $this->cep = $cep;
        return $this;
    }

    function setCidade($cidade) {
        $this->cidade = $cidade;
        return $this;
    }

    function setEstado($estado) {
        $this->estado = $estado;
        return $this;
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
    
    function getCategoria() {
        return $this->categoria;
    }

    function setCategoria($categoria) {
        $this->categoria = $categoria;
    }

}

?>

