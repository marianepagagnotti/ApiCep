<?php

namespace API_CEP\Model;

use API_CEP\DAO\EnderecoDAO;

class CidadeModel extends Model
{
    public $id_cidade, $descricao, $uf, $codigo_ibge, $ddd;

    public function getCidadesByUF($uf)
    {
        $dao = new EnderecoDAO();

        $this->rows = $dao->selectCidadesbyUF($uf);
    }
}