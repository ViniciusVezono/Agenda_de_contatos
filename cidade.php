<?php
    $idCidade=$_GET["idCidade"];            //Capturar o parâmetro enviado pelo URL
    include("./classeCidade.php");          //Incluir o arquivo classeCidade.php
    $cidade = new classeCidade();           //instanciar o objeto $cidade   
    $cidade->setIdCidade($idCidade);        //definir o conteudo do atributo idCidade utilizando o metodo set 
    $cidade->setNome("");                   //definir o conteudo do atributo nomem, inicialmete, como vazio
    if($cidade->getIdCidade()!=0){          //Se o atributo idCidade for diferente de zero
        $cidade->consultarCidade();         //executar o metedo consultarCidade, definindo o valor atributo nome
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

        <title>Agenda de contato!</title>
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
                            Cidade
                        </h1>
                    </center>
                </div>

            </header>            
            <!-- Fim do cabeçalho -->

            <br><br>


            <!-- Inicio do Formulario -->
            <form name="formCidade" action="salvarcidade.php" method="GET">

                <!-- Início do Elemento de Entrada input para IDCIDADE -->
                <div class="form-group">
                    <label for="campoIDCIDADE">Código da cidade </label>

                    <input class="form-control"
                           type="text" 
                           id="campoIDCIDADE"
                           name="campoIDCIDADE"
                           placeholder="Input de leitura aqui..."
                           value="<?php echo $cidade->getIdCidade();?>"
                           readonly>
                </div>
                <!-- Fim do Elemento de entrada input para IDCIDADE -->

                <!-- Início do Elemento de Entrada input para NOME -->
                <div class="form-group">
                    <label for="campoNOME">Nome</label>
                    <input type="text" 
                           class="form-control" 
                           id="campoNOME"
                           name="campoNOME"
                           aria-describedby="nomeHelp"
                           placeholder="Nome do contato"
                           value="<?php echo $cidade->getNome();?>"
                           required>
                </div>
                <!-- Fim do Elemento de entrada input para NOME -->

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