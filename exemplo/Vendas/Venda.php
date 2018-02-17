<?php
/**
 * Created by PhpStorm.
 * User: 01248267257
 * Date: 16/02/2018
 * Time: 19:54
 */

namespace Vendas;


class Venda
{
 private $id;
 private $datavenda;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getDatavenda()
    {
        return $this->datavenda;
    }

    /**
     * @param mixed $datavenda
     */
    public function setDatavenda($datavenda)
    {
        $this->datavenda = $datavenda;
    }

}