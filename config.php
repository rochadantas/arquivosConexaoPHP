<?php

class config{
   
    private $caminho;
    private $servidor;
   
    private $usuario;
    private $senha;
    private $banco;
  
//-------------------------------------------------------------------------------
   private function setServidor($servidor){
    $this->servidor = $servidor;
   }
   
   private function setUsuario($usuario){
    $this->usuario = $usuario;
   }
   private function setSenha($senha){
    $this->senha = $senha;
   }
   private function setBanco($banco){
    $this->banco = $banco;
   }
//-------------------------------------------------------------------------
   public function getServidor(){
    return $this->servidor;
   }
   
   public function getUsuario(){
    return $this->usuario;
   }
   public function getSenha(){
    return $this->senha;
   }
   public function getBanco(){
    return $this->banco;
   }
//----------------------------------------------------------------------------------------------------
   private function getConfigVars(){
    $this->caminho = ('configuracao.ini');
    $arquivo = parse_ini_file($this->caminho);
    $configVars = $arquivo;
    return $configVars;
   }
//----------------------------------------------------------------------------------------------------
   public function getDatabaseConnection(){
    /*esta função tem a fução de banco de dados para poder acessar, trazendo  os dados de um arquivo de congicuração
    carregando as variaeis e  */
    $configVars = $this->getConfigVars();
    $this->setServidor($configVars['BD_ADDRESS']);
    $this->setUsuario($configVars['BD_USUARIO']);
    $this->setSenha($configVars['BD_SENHA']);
    $this->setBanco($configVars['BD_BANCO']);
    }

}
?>
