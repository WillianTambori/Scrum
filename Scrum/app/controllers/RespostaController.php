<?php
namespace app\controllers;

use app\models;
use app\bd\conexaoBd;

class RespostaController{
    private $pergunta;
    private $usuario;
    private $resposta;

    public function __construct(ConexaoBD $bd)
    {
        $this->pergunta = new models\PerguntaModel($bd);
        $this->resposta = new models\RespostaModel($bd);
        $this->usuario = new models\UsuarioModel($bd);
        
    }
    public function getAll()
    {
        $usuario = $this->resposta->selectAll();
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
