<?php require_once "Funcionario.php" ?>
<?php require_once "conectar.php" ?>

<link href="css/MyStyle.css" rel="stylesheet" type="text/css">
<link href="cssBootstrap/bootstrap.min.css" rel="stylesheet" type="text/css">
 
    <br><br>
<div class="container container-fluid rounded p-4 form" style="width: 400px;" id="base"> 
    <center>
<?php 

    function listarFuncionarios($conexao){
        $sql = "select * from dadosFuncionarios";
        $resultado = mysqli_query($conexao, $sql); ?> 

        <h3> Lista de funcionários </h3><hr>
        
        <?php while ($array = mysqli_fetch_assoc($resultado)) { ?> 
                <center>
					<form action="alterarFuncionario.php" method="POST">	
					<table class="table table-dark">
							<tr>
								<td> <input type="hidden" value = <?php echo $array['ID'];?> name="id"> </td> 
							</tr>
							<tr>
								<td> Nome: </td>
								<td> <input type="text" value = <?php echo $array['nome'];?> name="nome"> </td>
							</tr>
							<tr>
								<td> CPF: </td>
								<td> <input type="text" value = <?php echo $array['cpf'];?>  name="cpf"> </td>
							</tr>
							<tr>
								<td> Endereço: </td>
								<td> <input type="text" value = <?php echo $array['endereco'];?>  name="endereco"> </td>
							</tr>
							<tr>
								<td> Telefone: </td>
								<td> <input type="text" value = <?php echo $array['telefone'];?>  name="telefone"> </td>
							</tr>
							<tr> 
								<td> Alterar: </td>
								<td> <input type="submit" value="Alterar"> </td>
							</tr>
					  	</form>
						  	<tr>
								<td> Remover: </td>
								<td>
									<form action="removerFuncionario.php" method="POST">
										<input type="hidden" value = <?php echo $array['ID'];?> name="id">
										<input type="submit" value="Remover"> 
									</form>
								</td>
							</tr>
                 	</table>
                </center>
        <?php }   
        } 
        ?>

<?php 
    listarFuncionarios($conexao);
?>
<a class="btn btn-outline-primary" role="button" href="index.php"> Voltar </a>
</div>