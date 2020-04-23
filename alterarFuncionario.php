<?php require_once "Funcionario.php" ?>
<?php require_once "conectar.php" ?>
<?php require_once "formListar.php" ?>

<?php 
    $funcionario=new Funcionario;
			
    $funcionario->id= $_POST["id"];
    $funcionario->nome = $_POST["nome"];
    $funcionario->cpf =  $_POST["cpf"];
    $funcionario->endereco = $_POST["endereco"];
    $funcionario->telefone = $_POST["telefone"];	
    
    
        if (alterar($conexao,$funcionario))
            header("Location:formListar.php?removido=true");
        else
            echo mysqli_error($conexao);
   
?>
<?php 
   function alterar($conexao,$funcionario) {
	   
    $sql = "UPDATE dadosFuncionarios SET    nome='$funcionario->nome', 
                                            cpf= '$funcionario->cpf',
                                            endereco = '$funcionario->endereco',
                                            telefone = '$funcionario->telefone' WHERE id = '$funcionario->id' ";
 
    $resultado= mysqli_query($conexao,$sql);
  
    return $resultado;
    }
?>
