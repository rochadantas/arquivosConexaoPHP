<?php

include_once('config.php');

class getConexao extends config{
//declaração de variavel do tipo privado
    
    private $conn;
//--------------------------------------------------------------------------
//criar um construtor para iniciar as variável com seu devidos valores
    function __construct(){
       $this->conn = '';
    }
//--------------------------------------------------------------------------    
//criação de metodos de acesso para recebimento de parametro da ultilização no sistema extreno
    private function conectarAcesso($sql){
        //$sqlConteudo = $sql;
        $this->getDatabaseConnection();
        $servidor = $this->getServidor();
        $usuario = $this->getUsuario();
        $senha = $this->getSenha();
        $banco = $this->getBanco();
//cria um objeto do tipo mysqli ja inicia com valores principal do banco
        $this->conn = mysqli_connect($servidor,$usuario,$senha,$banco);
        
        //--------------------------------------------------------------------------
//variavel recebe a requisição do banco como os para de conexão e conteúdo pelo sql
        $result = mysqli_query($this->conn,$sql);
        return $result;
        //$this->conn->close();
    }
// todos o matodos acima esta todo privado para não tem um acesso direto, sendo permitido somento com o metodo public
//especificado abaixo
//---------------------------------------------------------------------------
    public function conectar($conector){
        $table = $this->conectarAcesso($conector);
        return $table;
       
    }
//---------------------------------------------------------------------------
}
?>  