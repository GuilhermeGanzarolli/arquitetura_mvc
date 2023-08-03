<?php

namespace MF\Model;

abstract class Model{

    protected $db;

    public function __construct(\PDO $db){//Este prâmetro que está em parênteses é a conexao com o banco de dados
        $this->db = $db;
    }

}

?>