<?php
namespace app\models;

use app\bd;

class UsuarioModel{
    private $conexao; // ConexaoBD
    public function __construct($bd)
    {
        $this->conexao = $bd;

        
    }
   
    public  function select($id){
        
        return $this->conexao->executaSQL("SELECT * FROM usuario WHERE id = $id ");
    }
    public  function selectAll(){
    
        return $this->conexao->executaSQL("SELECT * FROM usuario");
    }

    public  function insert($nome,$email,$senha,$idade)
    {
        $comandoSQL = "INSERT INTO usuario (nome,email,senha,idade) values ('$nome','$email','$senha','$idade')";
        $this->conexao->executaComando($comandoSQL);
    }

    public  function update($id,$nome,$email,$senha,$idade)
    {
        $comandoSQL = "UPDATE usuario SET nome ='$nome', email ='$email', senha ='$senha' , idade ='$idade'  WHERE id = $id";
        return $this->conexao->executaComando($comandoSQL);

    }
    public  function delete($id)
    {
        $comandoSQL = "DELETE FROM usuario WHERE id = $id";
        return $this->conexao->executaComando($comandoSQL);

    }

    

    
}


?>