<?php require_once "Funcionario.php" ?>
<?php require_once "conectar.php" ?>
<?php require_once "formListar.php" ?>

<?php 
    function removeFuncionario($conexao, $id) {
        $sql = "DELETE FROM dadosfuncionarios WHERE ID = '$id' ";
        $resultado = mysqli_query ($conexao, $sql);   

            return $resultado; 
    }

    $id = $_POST['id'];

        removeFuncionario($conexao, $id);
        header("Location:formListar.php");
?>
    