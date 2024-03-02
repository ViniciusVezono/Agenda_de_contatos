<?php
    $idContato=$_GET["idContato"];
    include ("./classeContato.php");
    $contato  =  new classeContato();
    $contato->setNome("");
    $contato->setEmail("");
    $contato->setTelefone("");
    $contato->setIdCidade(0);
    $contato->setIdTipoDeContato(0);
    if($contato->getIdContato()!==0){
        $contato->consultarContato();
    }
?>

<!doctype html>
<html lang="pt-br">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <title>Agenda de contato</title>
    </head>
    <body>
        <!-- Início da DIV container -->
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
                    <a class="nav-link" href="tipodecontato.php">Tipos de Contatos</a>
                </li>
            </ul>  
            <!-- fim do navbar -->

            <!-- Início do cabeçalho -->
            <header>
                <div class="alert alert-secondary" role="alert">
                    <center>
                        <h1>
                            Contato
                        </h1>
                    </center>
                </div>

            </header>            
            <!-- Fim do cabeçalho -->

            <br><br>


            <!-- Inicio do Formulario -->
            <form name="formContato" action="salvarcontato.php" method="GET">

                <!-- Início do Elemento de Entrada input para IDCONTATO -->
                <div class="form-group">
                    <label for="campoIDCONTATO">Código de contato</label>

                    <input class="form-control"
                           type="text" 
                           id="campoIDCONTATO"
                           name="campoIDCONTATO"
                           value="<?php echo $contato->getIdContato();?>"
                           placeholder="Input de leitura aqui..."
                           readonly>

                    <small id="campoIDCONTATOHelp" class="form-text text-muted">Código é gerado pelo sistema.</small>
                </div>
                <!-- Fim do Elemento de entrada input para IDCONTATO -->

                <!-- Início do Elemento de Entrada input para NOME -->
                <div class="form-group">
                    <label for="exampleInputEmail1">Nome</label>
                    <input type="text" 
                           class="form-control" 
                           id="campoNOME"
                           name="campoNOME"
                           value="<?php echo $contato->getNome(); ?>"
                           aria-describedby="nomeHelp"
                           placeholder="Nome do contato"
                           required>
                    <small id="emailHelp" class="form-text text-muted">Informe o nome completo do contato</small>
                </div>
                <!-- Fim do Elemento de entrada input para NOME -->

                <!-- Início do Elemento de Entrada input para EMAIL -->
                <div class="form-group">
                    <label for="campoEMAIL">Endereço de Email</label>
                    <input type="email" 
                           class="form-control"
                           id="campoEMAIL" 
                           name="campoEMAIL"
                           value="<?php echo $contato->getEmail(); ?>"
                           aria-describedby="emailHelp"
                           placeholder="Insira o seu Email"
                           required>
                    <small id="emailHelp" class="form-text text-muted">Informe um email válido do contato</small>
                </div>
                <!-- Fim do Elemento de entrada input para EMAIL -->

                <!-- Início do Elemento de Entrada input para TELEFONE -->
                <div class="form-group">
                    <label for="exampleInputEmail1">Telefone</label>
                    <input type="tel"
                           class="form-control"
                           id="campoTELEFONE"
                           name="campoTELEFONE"
                           value="<?php echo $contato->getTelefone(); ?>"
                           aria-describedby="telefoneHelp" 
                           placeholder="Informe o telefone na forma indicado"
                           pattern="[0-9]{2}-[0-9]{5}-[0-9]{4}"
                           required>
                    <small id="emailHelp" class="form-text text-muted">Informe um telefone no formato 99-99999-9999</small>
                </div>
                <!-- Fim do Elemento de entrada input para TELEFONE -->

                <!-- Início do Elemento de Entrada input para IDCIDADE -->
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Selecione a cidade</label>
                    <select class="form-control" 
                            id="campoIDCIDADE"
                            name="campoIDCIDADE"
                            aria-describedby="cidadeHelp"
                            required>
                        <?php 
                        include('./conexao.phpp');
                        $select = "SELECT * FROM cidade BY NOME";
                        $retornoDaConsulta = $PDO->prepare($select);
                        $retornoDaConsulta->execute();
                        foreach ($retornoDaConsulta as $registro){
                            $idCidade = utf8_encode($registro["IDCIDADE"]);
                            $nome     = utf8_encode($registro["NOME"]);
                            if($contato->getIdCidade()!=$idCidade){
                                echo "<option value='$idCidade'>$nome</option>";
                            }else{
                                echo "<option value='$idCidade' selected>$nome</option>";
                            }
                        }
                        ?>
                    </select>
                    <small id="cidadeHelp" class="form-text text-muted">Indique uma cidade onde o contato mora</small>
                </div>
                <!-- Fim do Elemento de entrada input para IDCIDADE -->

                <!-- Início do Elemento de Entrada input para IDTIPODECONTATO -->       
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Tipo de Contato</label>
                    <select class="form-control" 
                            id="campoIDTIPODECONTATO"
                            name="campoIDTIPODECONTATO"
                            aria-describedby="tipodecontatoHelp"
                            required>
                        
                        <?php 
                            include('./conexao.php');
                            $select = "SELECT * FROM tipodecontato ORDER BY NOME";
                            $retornoDaConsulta = $PDO->prepare($select);
                            $retornoDaConsulta->execute();
                            foreach ($retornoDaConsulta as $registro){
                                $idTipoDeContato = utf8_encode($registro["IDTIPODECONTATO"]);
                                $nome            = utf8_encode($registro["NOME"]);
                                if($contato->getIdTipoDeContato()!= $idTipoDeContato){
                                    echo "<option value='$idTipoDeContato'>$nome</option>";
                                }else {
                                    echo "<option value='$idTipoDeContato' selected>$nome</option>";
                                }
                            }
                        
                        ?>
                    </select>
                    <small id="cidadeHelp" class="form-text text-muted">Indique uma tipo de contato</small>
                </div>              
                <!-- Fim do Elemento de entrada input para IDCONTATO -->

                <!-- Início do Botão ENVIAR -->
                <input type="submit" value="Salvar">
                <!-- Fim do Botão ENVIAR -->

            </form>

            <!-- Fim do formulário -->

            <br><br>

            <!-- Início do rodapé -->
            <footer>
                <div class="alert alert-secondary" role="alert">
                    <center>  
                        <strong>Agenda de contatos</strong> .:. Desenvolvido por Vinícius .:. Direitos Reservados &COPY;
                    </center>    
                </div>
            </footer>
            <!-- Fim do rodapé -->

        </div>
        <!-- Fim DIV container -->

        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>