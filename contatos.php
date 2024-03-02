<?php
//A instrução abaixo, vai incluir o conteudo do arguivo conexao.php, portanto,
//vai fazer conexao com o Mysql e em seguida vai ser acessada o BD projetocontato.
// Se o processo realizar, naturalmente será acessada a página contatos.php
// caso contrário, as mensagens de erro programadas serão apresentadas 
// e seremos remetidos para index.php

include("conexao.php");
?>
<!doctype html>
<html lang="pt-br">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <title>Agenda Contatos</title>
    </head>
    <body>
        <div class="container">
            
        
            <!-- Inicio do NavBar -->
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contatos.php">Contatos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="cidades.php">Cidades</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="tipodecontatos.php">Tipos de Contatos</a>
                </li>
            </ul>  
            <!-- fim do navbar -->

            <!-- Início do cabeçalho -->
            <header>
                <div class="alert alert-secondary" role="alert">
                    <center>
                        <h1>
                            Contatos
                        </h1>
                    </center>
                </div>

            </header>            
            <!-- Fim do cabeçalho -->

            <!-- Início do Botão novo superior -->
            <a href="contato.php?=idContato=0">
                <button type="button" class="btn btn-secondary">Novo Contato</button>
            </a>
            <br><br>
            <!-- Fim do Botão novo superior -->

            <!-- Inicio da tabela -->

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Telefone</th>
                        <th scope="col">Email</th>
                        <th scope="col">Cidade</th>
                        <th scope="col">Tipo de contato</th>
                        <th scope="col"></th>
                        <th scope="col"></th>   
                    </tr>
                </thead>
                <tbody>
                    
                    <?php
                    $select = "SELECT contato.IDCONTATO as IdContato,"
                            . "contato.NOME as Nome,"
                            . "contato.EMAIL as EMail,"
                            . "contato.TELEFONE as Telefone,"
                            . "cidade.NOME as Cidade,"
                            . "tipodecontato.NOME as TipoDeContato "
                            . "FROM contato "
                            . "INNER JOIN cidade ON contato.IDCIDADE=cidade.IDCIDADE "
                            . "INNER JOIN tipodecontato ON contato.IDTIPODECONTATO=tipodecontato.IDTIPODECONTATO "
                            . "ORDER BY NOME;";
                    
                    $retornoDaConsulta  = $PDO->prepare($select);
                    $retornoDaConsulta->execute();

                    foreach ($retornoDaConsulta as $registro){
                    
                        $idContato  = utf8_encode($registro["IdContato"]);
                        $nome       = utf8_encode($registro["Nome"]);
                        $email      = utf8_encode($registro["EMail"]);
                        $telefone   = utf8_encode($registro["Telefone"]);
                        $cidade     = utf8_encode($registro["Cidade"]);
                        $tipodecontato = utf8_encode($registro["TipoDeContato"]);
                    
                    ?>
                                        
                    <tr>
                        <th scope="row"><?php echo $idContato; ?></th>
                        <td><?php echo $nome; ?></td>
                        <td><?php echo $telefone; ?></td>
                        <td><?php echo $email; ?></td>
                        <td><?php echo $cidade; ?></td>
                        <td><?php echo $tipodecontato; ?></td>


                        <td> 
                            <a href="contato.php?idContato=<?php echo $idContato ?>">
                                <button type="button" class="btn btn-warning">Alterar</button> 
                            </a>
                        </td>
                        
                        <td>
                            <a href="excluircontato.php?idContato=<?php echo $idContato ?>">
                                <button type="button" class="btn btn-danger">Excluir</button>
                            </a>    
                        </td>
                    </tr>
              
                    <?php
                    }
                    ?>
                    
                </tbody>
            </table>


            <!-- Fim da tabela -->

            <!-- Início do Botão novo inferior -->
            <a href="contato.php?idContato=0">
                <button type="button" class="btn btn-secondary">Novo Contato</button>
            </a>
            <br><br>
            <!-- Fim do Botão novo inferior -->

            <!-- Inicio do Footer (rodapé)-->
            <footer>
                <div class="alert alert-secondary" role="alert">
                    <center>  
                        <strong>Agenda de contatos</strong> .:. Desenvolvido por Vinícius .:. Direitos Reservados &COPY;
                    </center>    
                </div>
            </footer>
            <!-- fim do Footer -->

        
        </container>
        

        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        -->
</body>
</html>