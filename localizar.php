<?php require_once "conectar.php" ?>
<?php require_once "Funcionario.php" ?>

<link href="css/MyStyle.css" rel="stylesheet" type="text/css">
<link href="cssBootstrap/bootstrap.min.css" rel="stylesheet" type="text/css">

<center>
<div class="container container-fluid rounded p-4 form" style="width: 300px;" id="base">

    <h3> Digite o nome: </h3>
    <hr> 
        <form method="POST" action="pesquisar.php?a=buscar">
            <div class="form-group">
                <input type="text" class="form-control" autocomplete="off" placeholder="Nome" name="palavra"><br>
                <button type="submit" class="btn btn-outline-primary buttonRegister"> 
                <svg class="bi bi-search" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 011.415 0l3.85 3.85a1 1 0 01-1.414 1.415l-3.85-3.85a1 1 0 010-1.415z" clip-rule="evenodd"/>
                    <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 100-11 5.5 5.5 0 000 11zM13 6.5a6.5 6.5 0 11-13 0 6.5 6.5 0 0113 0z" clip-rule="evenodd"/>
                </svg>
                Cadastrar </button>
            </div>
    </form>
</div> 
</center>