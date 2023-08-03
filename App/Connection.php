<?php

namespace App;

class Connection{

    public static function getDb(){//Tornar este método estático faz com que seja mais fácil sua requisição
        try{
            $conn = new \PDO(
                "mysql:host=localhost;dbname=mvc;charset=utf8",
                "root",
                ""
            );

            return $conn;

        }catch(\PDOException $e){//Utilizamos a barra para indicar que o PDO precisa ser puxado da raiz do php, caso não tenha a barra será feita a pesquisa do PDO no diretório App

        }
    }
}

?>