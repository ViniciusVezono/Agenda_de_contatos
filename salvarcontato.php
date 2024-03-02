<?php
//capturar os valores enviados pelo método GET
$idContato      =$_GET["campoIDCONTATO"];
$nome           =$_GET["campoNOME"];
$email          =$_GET["campoEMAIL"];
$telefone       =$_GET["campoTELEFONE"];
$idCidade       =$_GET["campoIDCIDADE"];
$idTipoDeContato =$_GET["campoIDTIPODECONTATO"];

//Incluir o arquivo classeContato.php
include("./classeContato.php");
//Instanciar o objeto $contato
$contato = new classeContato();
//Definir os valores dos atributos do objeto 
$contato->setIdContato($idContato);
$contato->setNome($nome);
$contato->setEmail($email);
$contato->setTelefone($telefone);
$contato->setIdCidade($idCidade);
$contato->setIdTipoDeContato($idTipoDeContato);
//verificar se deve ser executado inserircontato() ou alterarContato()
if($contato->getIdContato()==0){
    //executar o metedo inserirContato
    $contato->inserirContato();
    //mensagem
    echo "<script>alert('Contato $nome cadastrado');</script>";
    //redirecionamento, via javascript, para contatos.php
    echo "<script>window.location.assign('contatos.php');</script>";
}else {
    //executar o metodo alterarCidade
    $contato->alterarContato();
    //mensagem
    echo "<script>alert('Contato $nome alterado');</script>";
    //redirecionamento, via javascript, para contato.php
    echo "<script>window.location.assign('contatos.php');</script>";
    
}        