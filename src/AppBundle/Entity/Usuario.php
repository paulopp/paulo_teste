<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Usuario
 *
 * @author paulo
 */
namespace ArcaSolutionsTeste\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Table(name="usuario")
 * @UniqueEntity(fields="login", message="Usuario já existe")
 * @ORM\HasLifecycleCallbacks
 */
class Usuario
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
     * @ORM\Column(type="string", length=45, unique=true)
     * @Assert\NotBlank(message="Login é obrigatório")
     * @Assert\Regex(pattern="/^[A-Z]{2}$/",
     *  message="Erro ao informar Login."
     * )
     */
    protected $login;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=6, unique=true)
     * @Assert\NotBlank(message="Senha é obrigatória")
     * @Assert\Regex(pattern="/^[A-Z]{2}$/",
     *  message="Erro ao informar a senha."
     * )
     */
    protected $senha;

    

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
    
    function getLogin() {
        return $this->login;
    }

    function getSenha() {
        return $this->senha;
    }

    function setLogin($login) {
        $this->login = $login;
        return $this;
    }

    function setSenha($senha) {
        $this->senha = $senha;
        return $this;
    }
   
}

?>