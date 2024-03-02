<?php
//capturar os valores enviados  pelo método GET 
$idTipoDeContato        =$_GET["campoTIPODECONTATO"];
$nome                   =$_GET["campoNOME"];
//Incluir o arquivo classeTipoDeContato.php
include ("./classeTipoDeContato.php");
//instanciar o objeto classeTipoDeContato
$tipoDeContato = new classeTipoDeContato();
//definir os valores dos atributos do objeto 
$tipoDeContato->setIdTipoDeContato($idTipoDeContato);
$tipoDeContato->setNome($nome);
//Verificar se deve ser executado inserirTipoDeContato ou alterarTipoDeContato
if($tipoDeContato->getIdTipoDeContato()==0){
    $tipoDeContato->inserirTipoDeContato();
    echo "<script>alert('Tipo De Contato $nome cadastrado');</script>";
    echo "<script>window.location.assign('tipodecontatos.php');</script>";
    
}else {
    $tipoDeContato->alterarTipoDeContato();
    echo "<script>('Tipo de Contato $nome alterado');</script>";
    echo "<script>window.location.assign('tiposdecontatos.php');</script>";
}
        

