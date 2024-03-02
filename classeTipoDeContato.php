<?php


/**
 * Description of classeTipoDeContato
 *
 * @author User
 */
class classeTipoDeContato {
    //ATRIBUTOS
    private $idTipoDeContato;
    private $nome;
    
    //Getters e Setters
    
    function getIdTipoDeContato() {
        return $this->idTipoDeContato;
    }

    function getNome() {
        return $this->nome;
    }

    function setIdTipoDeContato($idTipoDeContato) {
        $this->idTipoDeContato = $idTipoDeContato;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

//METEDOS DO CRUD
    //Metodo inserirTipoDeContato
    function inserirTipoDeContato(){
        include("./conexao.php");
        $comando = "INSERT INTO tipodecontato (NOME) VALUES (?);";
        $resposta = $PDO->prepare($comando);
        //definir o parâmetro, utilizando o atributo da classe
        $resposta->bindValue(1, $this->nome);
        $resposta->execute();
        //Capturar o ID gerado pelo MySQL
        foreach ($resposta as $registro){
            $this->idCidade = utf8_encode($registro["IdGerado"]);
        }
    }
    
    //Método consultarContato
    function consultarTipoDeContato(){
        include ("./conexao.php");
        //Montar o comando a ser executado 
        $comando = "SELECT * FROM tipodecontato WHERE IDTIPODECONTATO=?;";
        $resposta = $PDO->prepare($comando);
        $resposta->bindValue(1, $this->idTipoDeContato);
        $resposta->execute();
        //Atribuir aos atributos o resultado da consulta 
        foreach ($resposta as $registro){
            $this->nome         = utf8_encode($registro["NOME"]);
        }    
    }
    function alterarTipoDeContato(){
        include("./conexao.php");
        $comando = "UPDATE tipodecontato SET"
                . "NOME=? "
                . "WHERE (IDTIPODECONTATO=?)";
        $resposta = $PDO->prepare($comando);
        //Definir os 2 parâmetros, utilizando os atributos da classe 
        $resposta->bindValue(1, $this->nome);
        $resposta->bindValue(2, $this->idTipoDeContato);
        $resposta->execute();
    }
    function excluirTipoDeContato(){
        include("./conexao.php");
        //montar o comando a ser executado, com o parâmetro da function excluirCidade
        $comando = "SELECT excluirTipoDeContato(?) AS ExclusaoRealidade;";
        $resposta = $PDO->prepare($comando);
        $resposta->bindValue(1, $this->idTipoDeContato);
        $resposta->execute();
        //capturar o retorno da função excluirContato
        foreach($resposta as $registro){
            $exclusaoRealizada = $registro["Exclusao Realizada"];
        }
        return $exclusaoRealizada;
    }
    
    
    
    
}