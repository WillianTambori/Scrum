<?php
namespace app\models;

use app\bd;

class UsuarioModel{
    private $conexao; // ConexaoBD
    public function __construct($bd)
    {
        $this->conexao = $bd;

        
    }
    public function obterUsuario()
    {
        return $this->conexao->executaSQL("SELECT * FROM usuario");

    }

    
}


?>