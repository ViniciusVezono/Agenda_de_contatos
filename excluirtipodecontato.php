<?php

$idTipoDeContato    =   $_GET["idTipoDeContato"];
include("./classeTipoDeContato.php");
$tipoDeContato = new classeTipoDeContato();
$tipodecontato->setIdTipoDeContato($idTipoDeContato);
$resultado = $tipodecontato->excluirTipoDeContato();
echo "<script>alert('Tipo De Contato deletado');</script>";
echo "<script>window.location.assign('tiposdecontatos.php');</script>";