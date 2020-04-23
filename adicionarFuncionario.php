<?php require_once "conectar.php" ?>
<?php require_once "Funcionario.php" ?>

<link href="css/MyStyle.css" rel="stylesheet" type="text/css"> 
<link href="cssBootstrap/bootstrap.min.css" rel="stylesheet" type="text/css">
    <br>
<div class="container container-fluid rounded p-4 form" style="width: 400px;" id="base"> 
<?php 

$funcionario=new Funcionario();
			
$funcionario->nome = $_POST["nome"];
$funcionario->cpf =  $_POST["cpf"];
$funcionario->endereco = $_POST["endereco"];
$funcionario->telefone = $_POST["telefone"];	

        function inserirFuncionario($conexao, $funcionario) {
            $sql = "insert into dadosFuncionarios (nome, endereco, cpf, telefone)
            values (    '$funcionario->nome',
                        '$funcionario->endereco',
                        '$funcionario->cpf',
                        '$funcionario->telefone')";
            $resultado = mysqli_query($conexao, $sql);
                return $resultado;
        }

        if (inserirFuncionario($conexao, $funcionario)){ ?>
            <center>  
			    <table>
				    <tr>
                        <th> <h3> Cadastrado com sucesso! </h3> </th>
                    </tr>
					<tr>
              			<td> <hr> Nome: <?php echo $funcionario->nome; ?></td>
					</tr>
					<tr>
					    <td> CPF: <?php echo $funcionario->cpf; ?></td>
					</tr>
					<tr>
					    <td> Endereço: <?php echo $funcionario->endereco; ?></td>
					</tr>
					<tr>
					    <td> Telefone: <?php  echo $funcionario->telefone; ?></td>
					</tr>
				</table>
        <?php }

        else {
            $error = mysqli_error($conexao);
            echo "Não foi adicionado" . $error;
        }

        ?>

<center>
    <br>
<a class="btn btn-outline-primary" role="button" href="localizar.php"> Localizar </a>
<a class="btn btn-outline-success" role="button" href="formListar.php"> Listar </a>
</div>