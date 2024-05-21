<?php
namespace app\models;

use app\bd;

class RespostaModel
        {
            private $conexao; // ConexaoBD
    public function __construct($bd)
    {
        $this->conexao = $bd;

        
    }
   
    public  function select($id){
        
        return $this->conexao->executaSQL("SELECT * FROM resposta WHERE id = $id ");
    }
    public  function selectAll(){
    
        return $this->conexao->executaSQL("SELECT * FROM resposta");
    }

    public  function insert($usuario_id,$pergunta_id,$dataHora,$resposta)
    {
        $comandoSQL = "INSERT INTO resposta (usuario_id,dataHora,resposta) values ('$usuario_id','$pergunta_id','$dataHora','$resposta')";
        $this->conexao->executaComando($comandoSQL);
    }

    public  function update($id,$usuario_id,$pergunta_id,$dataHora,$resposta)
    {
        $comandoSQL = "UPDATE resposta SET usuario_id ='$usuario_id', pergunta_id = '$pergunta_id', dataHora ='$dataHora', resposta ='$resposta' WHERE id = $id";
        return $this->conexao->executaComando($comandoSQL);

    }
    public  function delete($id)
    {
        $comandoSQL = "DELETE FROM resposta WHERE id = $id";
        return $this->conexao->executaComando($comandoSQL);

    }

        
    }

?>


