<?php
/**
 * Created by PhpStorm.
 * User: 01248267257
 * Date: 16/02/2018
 * Time: 19:49
 */

namespace Vendas;


class Produto
{
private $nome;
private $valor;
private $quatidade;

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * @param mixed $valor
     */
    public function setValor($valor)
    {
        $this->valor = $valor;
    }

    /**
     * @return mixed
     */
    public function getQuatidade()
    {
        return $this->quatidade;
    }

    /**
     * @param mixed $quatidade
     */
    public function setQuatidade($quatidade)
    {
        $this->quatidade = $quatidade;
    }


}