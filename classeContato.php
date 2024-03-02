<?php


/**
 * Description of classeContato
 *
 * @author User
 */
class classeContato {
 private $idContato;
 private $nome;
 private $email;
 private $telefone;
 private $idCidade;
 private $idTipoDeContato;
 
 //Getters e Setters
 function getIdContato() {
     return $this->idContato;
 }

 function getNome() {
     return $this->nome;
 }

 function getEmail() {
     return $this->email;
 }

 function getTelefone() {
     return $this->telefone;
 }

 function getIdCidade() {
     return $this->idCidade;
 }

 function getIdTipoDeContato() {
     return $this->idTipoDeContato;
 }

 function setIdContato($idContato) {
     $this->idContato = $idContato;
 }

 function setNome($nome) {
     $this->nome = $nome;
 }

 function setEmail($email) {
     $this->email = $email;
 }

 function setTelefone($telefone) {
     $this->telefone = $telefone;
 }

 function setIdCidade($idCidade) {
     $this->idCidade = $idCidade;
 }

 function setIdTipoDeContato($idTipoDeContato) {
     $this->idTipoDeContato = $idTipoDeContato;
 }

 //Método inserirContato
        function inserirContato(){
            include("./conexao.php");
            $comando = "INSERT INTO contato (NOME,EMAIL,TELEFONE,IDCIDADE,IDTIPODECONTATO) VALUES (?,?,?,?,?);";
            $resposta = $PDO->prepare($comando);
            //definir os 5 parâmetros, utilizando os atributos da classe 
            $resposta->bindValue(1, $this->nome);
            $resposta->bindValue(2, $this->email);
            $resposta->bindValue(3, $this->telefone);
            $resposta->bindValue(4, $this->idCidade);
            $resposta->bindValue(5, $this->idTipoDeContato);
            $resposta->execute();
        }
//Método consultarContato
    function consultarContato(){
        include("./conexao.php");                                //conecta com o banco de dados 
            //Monta o comando   a ser executado 
        $comando = "SELECT * FROM contato WHERE IDCONTATO=?;";  
        $resposta = $PDO->prepare($comando);                    //prepara a execução do comando 
        $resposta->bindValue(1, $this->idContato);              // Definir o parâmetro
        $resposta->execute();                                   //Executa o comando
        // atribuir aos atributos o resultado da consulta 
        foreach ($resposta as $registro){
            $this->idContato        = utf8_encode($registro["IDCONTATO"]);
            $this->nome             = utf8_encode($registro["NOME"]);
            $this->email            = utf8_encode($registro["EMAIL"]);
            $this->telefone         = utf8_encode($registro["TELEFONE"]);
            $this->idCidade         = utf8_encode($registro["IDCIDADE"]);
            $this->idTipoDeContato  = utf8_encode($registro["IDTIPODECONTATO"]);            
        }
    }
        
        
        //Método alterarContato
        function alterarContato(){
            include ("./conexao.php");          // conecta com o banco de dados
            $comando = "UPDDATE contato SET "   
                    . "NOME=?,"
                    . "EMAIL=?,"
                    . "TELEFONE=?,"
                    . "IDCIDADE=?,"
                    . "IDTIPODECONTATO=? "
                    . "WHERE (IDCONTATO=?);";
                    
            $resposta = $PDO->prepare($comando);    
            // Definir os 6 parâmetros, utilizando os atributos classe 
            $resposta->bindValue(1, $this->nome);
            $resposta->bindValue(2, $this->email);
            $resposta->bindValue(3, $this->telefone);
            $resposta->bindValue(4, $this->idCidade);
            $resposta->bindValue(5, $this->idTipoDeContato);
            $resposta->bindValue(6, $this->idContato);
            $resposta->execute();                           //executa o comando
        }
       
            function excluirContato(){
                include("conexao.php");
                // montar o comando a ser executado, com o parâmetro da function excluir contato
                $comando = "DELETE FROM contato WHERE (IDCONTATO=?);";
                $resposta = $PDO->prepare($comando);
                $resposta->bindValue(1, $this->idContato);
                $resposta->execute();
                
            }

                
    }
