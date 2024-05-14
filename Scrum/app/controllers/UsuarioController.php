<?php
namespace app\controllers;

use app\models;
use app\bd\conexaoBd;


class UsuarioController{
    private $usuario;


    public function __construct(conexaoBd $bd)
    {
        $this->usuario = new models\UsuarioModel($bd);
    }
    public function listarUsuario()
    {
        $usuario = $this->usuario->obterUsuario();
        require_once "app/views/helloWord.php";
    }
}
?>