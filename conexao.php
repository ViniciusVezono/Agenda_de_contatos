<?php
// declarando e definindo as variáveis utilizadas para a conexão
// MySql e acesso ao banco de dados agenda_de_contatos

$servidorMySql = "localhost";   // servidor
$usuarioMySql = "root";     //usuario
$senhaMysql = ""; // senha 
$bancoMySql = "agendadecontato"; //nome do banco de dados


try{
    
    $PDO = new PDO ("mysql:host=$servidorMySql; dbname=$bancoMySql", $usuarioMySql, $senhaMysql);
    
} catch (PDOException $erroDeExcessaoPDO) {
    
    //MENSAGEM DO ERRO 
    echo "<script>alert('Erro ao conectar com o Banco de Dados');</script>";
    
    //redirecionamento para a pagina incial, via Javascript
    //echo "<script>window.location.assign('index.php');</script>";
    
}
