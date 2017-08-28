<?php

namespace AppBundle\Entity\SearchRepository;

use FOS\ElasticaBundle\Repository;
use \AppBundle\Model\EmpresaSearch;

class EmpresaRepository extends Repository
{
    public function search(EmpresaSearch $empresaSearch)
    {
        /////////////////////////////////////////////////////////////////
        // Retorna as empresas de acordo com os argumento informado:
        // Acuracidade de 80%
        ////////////////////////////////////////////////////////////////
        
        // Titulo
        if      ($empresaSearch->getTitulo() != null && $empresaSearch != '') {
            $query = new \Elastica\Query\Match();
            $query->setFieldQuery('empresa.titulo', $empresaSearch->getTitulo());
            $query->setFieldFuzziness('empresa.titulo', 0.7);
            $query->setFieldMinimumShouldMatch('empresa.titulo', '80%');
        // Endereço
        } elseif      ($empresaSearch->getEndereco() != null && $empresaSearch != '') {
            $query = new \Elastica\Query\Match();
            $query->setFieldQuery('empresa.endereco', $empresaSearch->getEndereco());
            $query->setFieldFuzziness('empresa.endereco', 0.7);
            $query->setFieldMinimumShouldMatch('empresa.endereco', '80%');
        // Cep
        } elseif      ($empresaSearch->getCep() != null && $empresaSearch != '') {
            $query = new \Elastica\Query\Match();
            $query->setFieldQuery('empresa.cep', $empresaSearch->getCep());
            $query->setFieldFuzziness('empresa.cep', 0.7);
            $query->setFieldMinimumShouldMatch('empresa.cep', '80%');    
        // Cidade
        } elseif      ($empresaSearch->getCidade() != null && $empresaSearch != '') {
            $query = new \Elastica\Query\Match();
            $query->setFieldQuery('empresa.cidade', $empresaSearch->getCidade());
            $query->setFieldFuzziness('empresa.cidade', 0.7);
            $query->setFieldMinimumShouldMatch('empresa.cidade', '80%');  
        // Categoria    
        } elseif      ($empresaSearch->getCategoria() != null && $empresaSearch != '') {
            $query = new \Elastica\Query\Match();
            $query->setFieldQuery('empresa.categoria', $empresaSearch->getCategoria());
            $query->setFieldFuzziness('empresa.categoria', 0.7);
            $query->setFieldMinimumShouldMatch('empresa.categoria', '80%');      
        } else {
            $query = new \Elastica\Query\MatchAll();
        }
         $baseQuery = $query;

        // then we create filters depending on the chosen criterias
        $boolFilter = new \Elastica\Filter\Bool();

        $filtered = new \Elastica\Query\Filtered($baseQuery, $boolFilter);

        $query = \Elastica\Query::create($filtered);

        return $this->find($query);
    }

}

?>