<?php

namespace AppBundle\Model;

use Symfony\Component\HttpFoundation\Request;

class EmpresaSearch
{
    // titulo da empresa
    protected $titulo;

    // endereço da empresa
    protected $endereco;
    
    // cep da empresa
    protected $cep;
    
    // cidade da empresa
    protected $cidade;
    
    // categoria da empresa
    protected $categoria;

    
    public function __construct()
    {
       
    }

    // Setters e Getters:
    function getTitulo() {
        return $this->titulo;
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

    function getCategoria() {
        return $this->categoria;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
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

    function setCategoria($categoria) {
        $this->categoria = $categoria;
        return $this;
    }
    
}

?>