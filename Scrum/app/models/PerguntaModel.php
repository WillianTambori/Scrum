<?php
namespace app\models;

use app\bd;

class PerguntaModel
        {
            private $conexao; // ConexaoBD
            public function __construct($bd)
            {
                $this->conexao = $bd;
        
                
            }
           
            public  function select($id){
                
                return $this->conexao->executaSQL("SELECT * FROM pergunta WHERE id = $id ");
            }
            public  function selectAll(){
            
                return $this->conexao->executaSQL("SELECT * FROM pergunta");
            }
        
            public  function insert($usuario_id,$dataHora,$pergunta,$titulo)
            {
                $comandoSQL = "INSERT INTO pergunta (usuario_id,dataHora,pergunta,titulo) values ('$usuario_id','$dataHora','$pergunta','$titulo')";
                $this->conexao->executaComando($comandoSQL);
            }
        
            public  function update($id,$usuario_id,$dataHora,$pergunta,$titulo)
            {
                $comandoSQL = "UPDATE pergunta SET usuario_id ='$usuario_id', dataHora ='$dataHora', pergunta ='$pergunta' , titulo ='$titulo'  WHERE id = $id";
                return $this->conexao->executaComando($comandoSQL);
        
            }
            public  function delete($id)
            {
                $comandoSQL = "DELETE FROM pergunta WHERE id = $id";
                return $this->conexao->executaComando($comandoSQL);
        
            }
        
    }

?>

?>
