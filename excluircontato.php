<?php
    $idContato      =$_GET["idContato"];
    include ("classeContato.php");
    $contato = new classeContato();
    $contato->setIdContato($idContato);
    $resultado = $contato->excluirContato();
    echo "<script>alert('Contato Deletado')</scritp>";
    echo "<script>window.location.assign('contatos.php');</script>";

