<?php  
   
class conec{
    //declaração de variavel do tipo privado
    private $servidor;
    private $usuario; 
    private $senha;
    private $banco;
    private $conn;
//--------------------------------------------------------------------------
//criar um construtor para iniciar as variável com seu devidos valores
    function __construct(){
       $this->servidor = '';
       $this->usuario = ''; 
       $this->senha = '';
       $this->banco = '';
    }
//--------------------------------------------------------------------------    
//criação de metodos de acesso para recebimento de parametro da ultilização no sistema extreno
    private function conectarAcesso($sql){
        $servidor = $this->servidor;
        $usuario = $this->usuario;
        $senha = $this->senha;
        $banco = $this->banco;
//cria um objeto do tipo mysqli ja inicia com valores principal do banco
        $this->conn = new mysqli($servidor,$usuario,$senha,$banco);
//--------------------------------------------------------------------------
//variavel recebe a requisição do banco como os para de conexão e conteúdo pelo sql
        $result = mysqli_query($this->conn,$sql);
//ferifica se tem erro 
        if(!$result){
            die("erro:".mysqli_error($this->conn));
        }else{
//retorna o resultado
            return $result;
        }
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
  