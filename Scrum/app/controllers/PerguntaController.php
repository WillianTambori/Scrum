<?php
namespace app\controllers;

use app\models;
use app\bd\conexaoBd;

class PerguntaController{
    private $pergunta;
    private $usuario;
    private $resposta;

    public function __construct(ConexaoBD $bd)
    {
        $this->pergunta = new models\PerguntaModel($bd);
        $this->resposta = new models\RespostaModel($bd);
        $this->usuario = new models\UsuarioModel($bd);
        
    }
    public function get($id){
        $perguntas = $this->pergunta->select($id);
        require_once "app/views/home.php";

    }
    public function getAll()
    {
        $usuario = $this->pergunta->selectAll();
        require_once "app/views/helloWord.php";

    }
    public function post($data)
    {
        
       
    }
    public function put($data)
    {
        
        

    }
    public function delete($data)
    {
        

    }

    }

?>
