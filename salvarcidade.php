<?php
    //capturar os valores enviados pelo método GET
$idCidade=$_GET["campoIDCIDADE"];
$nome=$_GET["campoNOME"];
//Incluir o arquivo classeCidade.php
include ("./classeCidade.php");
//Instanciar o objeto $cidade
$cidade= new classeCidade();
//Definir os valores dos atributos do objeto
$cidade->setIdCidade($idCidade);
$cidade->setNome($nome);
//Verificar se deve ser executado inserirCidade() ou alterarCidade()
if ($cidade->getIdCidade()==0){
    $cidade = inserirCidade();
    echo "<script>alert('Cidade $nome cadastrada');</script>";
    //redirecionamento, via JavaScript, para cidades.php
    echo "<script>window.location.assign('cidade.php');</script>";
    
} else {
    //executar o metodo alterarCidade()
    $cidade->alterarCidade();
    //mensagem 
    echo "<script>alert('Cidade $nome alterada');</script>";
    //redirecionamento, via JavaScript, para cidades.php
    echo "<script>window.location.assign('cidades.php');</script>";
    
}
    

