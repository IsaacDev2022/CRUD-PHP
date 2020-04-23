<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link href="css/MyStyle.css" rel="stylesheet" type="text/css"> 
        <link href="cssBootstrap/bootstrap.min.css" rel="stylesheet" type="text/css">
    </head>
<body>
    <center>
        <div class="container container-fluid rounded p-4" style="width: 400px;" id="base">
            <img src="images/projecao.png" height="100px" width="320px">
            <form method="POST" action="adicionarFuncionario.php" class="form">
                <h3 style="color: black;"> Cadastro de Funcionário <br><hr>
                    <span class="label label-default"></span></h3>
                    <div class="form-group">
                        <label for="usr"> Nome: </label>
                        <input type="text" placeholder="Digite o primeiro nome"
                            class="form-control" autocomplete="off" name="nome">
                    </div>
                    <div class="form-group">
                        <label for="usr"> CPF: </label>
                        <input type="text" placeholder="Digite o CPF"
                            class="form-control" autocomplete="off" name="cpf">
                    </div>
                    <div class="form-group">
                        <label for="usr"> Endereço: </label>
                        <input type="text" placeholder="Digite o Endereço"
                            class="form-control" autocomplete="off" name="endereco">
                    </div>
                    <div class="form-group">
                        <label for="usr"> Telefone: </label>
                        <input type="text" placeholder="Digite o Telefone"
                            class="form-control" autocomplete="off" name="telefone">
                    </div>
                    <button type="reset" class="btn btn-outline-danger buttonReset"> <svg class="bi bi-trash" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.5 5.5A.5.5 0 016 6v6a.5.5 0 01-1 0V6a.5.5 0 01.5-.5zm2.5 0a.5.5 0 01.5.5v6a.5.5 0 01-1 0V6a.5.5 0 01.5-.5zm3 .5a.5.5 0 00-1 0v6a.5.5 0 001 0V6z"/>
                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 01-1 1H13v9a2 2 0 01-2 2H5a2 2 0 01-2-2V4h-.5a1 1 0 01-1-1V2a1 1 0 011-1H6a1 1 0 011-1h2a1 1 0 011 1h3.5a1 1 0 011 1v1zM4.118 4L4 4.059V13a1 1 0 001 1h6a1 1 0 001-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" clip-rule="evenodd"/>
                    </svg>
                    Apagar </button>
                    <button type="submit" class="btn btn-outline-primary buttonRegister"> <svg class="bi bi-caret-right" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M6 12.796L11.481 8 6 3.204v9.592zm.659.753l5.48-4.796a1 1 0 000-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 001.659.753z" clip-rule="evenodd"/>
                    </svg>
                    Cadastrar </button>
                </form>
            </div>
        </center>
</body>
</html>
