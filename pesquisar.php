<?php require_once "conectar.php" ?>
<?php require_once "Funcionario.php" ?>

<link href="css/MyStyle.css" rel="stylesheet" type="text/css">
<link href="cssBootstrap/bootstrap.min.css" rel="stylesheet" type="text/css">

<center>
<div class="container container-fluid rounded p-4 form" style="width: 400px;" id="base">
<?php 
    $palavra = $_POST['palavra'];
    $a = $_GET['a'];

        if ($a == "buscar") {
            $palavra = trim($palavra);
            $sql = "SELECT * FROM dadosFuncionarios WHERE nome LIKE '%".$palavra."%' ORDER BY nome";

            $resultado = mysqli_query($conexao, $sql);
            $numRegistro = mysqli_num_rows($resultado);

                if ($numRegistro != 0) {
                    while ($exibe = mysqli_fetch_object($resultado)) { ?>
                        <!-- echo $exibe->nome . "<br>";
                        echo $exibe->cpf . "<br>";
                        echo $exibe->endereco . "<br>";
                        echo $exibe->telefone . "<br>"; -->
                        
                        <center>
                            <table class="table table-dark">
                                    <tr>
                                    <th> Resultado da pesquisa: </th>
                                    </tr>
                                    <td> Nome: </td>
                                        <td> <?php echo $exibe->nome ?> </td>
                                    </tr>
                                    <tr>
                                        <td> CPF: </td>
                                        <td> <?php echo $exibe->cpf ?> </td>
                                    </tr>
                                    <tr>
                                        <td> Endereço: </td>
                                        <td> <?php echo $exibe->endereco ?> </td>
                                    </tr>
                                    <tr>
                                        <td> Telefone: </td>
                                        <td> <?php  echo $exibe->telefone ?> </td>
                                    </tr>					
                            </table>
                            <a class="btn btn-outline-success" role="button" href="localizar.php"> 
                            <svg class="bi bi-arrow-return-left" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M5.854 5.646a.5.5 0 010 .708L3.207 9l2.647 2.646a.5.5 0 01-.708.708l-3-3a.5.5 0 010-.708l3-3a.5.5 0 01.708 0z" clip-rule="evenodd"/>
                            <path fill-rule="evenodd" d="M13.5 2.5a.5.5 0 01.5.5v4a2.5 2.5 0 01-2.5 2.5H3a.5.5 0 010-1h8.5A1.5 1.5 0 0013 7V3a.5.5 0 01.5-.5z" clip-rule="evenodd"/>
                            </svg>
                            Voltar </a>
                        </center>
                <?php    }
                }

                else {
                    echo "Nennum registro encontrado";
                }
        }

?>
</div>
