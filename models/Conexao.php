<?php 

class Conexao {

  private $host = 'mysql:host=localhost;dbname=oop_desafio;port=3306';
  private $user = 'root';
  private $pass = '';

  protected function criarConexao(){
    //Retorna a conexão para quem quiser usar:
    return new PDO($this->host, $this->user, $this->pass);
  }

}

?>