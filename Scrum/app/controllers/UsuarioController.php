<?php
namespace app\controllers;

use app\models;
use app\bd\conexaoBd;

class UsuarioController{
    private $pergunta;
    private $usuario;
    private $resposta;

    public function __construct(ConexaoBD $bd)
    {
        $this->pergunta = new models\PerguntaModel($bd);
        $this->resposta = new models\RespostaModel($bd);
        $this->usuario = new models\UsuarioModel($bd);
        
        

        //$this->CadastroModelo = new CadastroModelo($banco);
        
    }
    public function getAll()
    {
        $usuario = $this->usuario->selectAll();
        require_once "app/views/login.php";
    }

    public function post($data = null)
    {
        if($data === null){
            require_once "app/views/cadastrar.php";
        }else{
            $this->usuario->insert($data[0],$data[2],$data[3],$data[1]);
            require_once "app/views/login.php";
        }
        
       
    }
    public function put($data)
    {
        
        

    }
    public function delete($data)
    {
        

    }
    public function login($data){
        $usuario = $this->usuario->select($data[0]);
      if($usuario !== null){
        if($data[1] === $usuario[0]['senha']){
            require_once "app/views/cadastrar.php";   
        }else{
            require_once "app/views/login.php";
        }
        }else{
            require_once "app/views/login.php";
        }
        
    }

    }

?>