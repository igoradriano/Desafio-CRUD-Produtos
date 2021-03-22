<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        .box{
            text-align: center;
        }
        .form-group{
            text-align:left;
        }
    </style>
</head>

<body>

    <div class="container box" style="width:500px; margin-top:10px">
        <img src="assets/user.png" alt="logo" width="150px" style="margin-bottom:5px">
        <h1 style= "text-align: center">Cadastro de usuário</h1>
        
        <form action="_insert_usuario_externo.php" method="post">
            <div class="form-group">
                <label>Nome do usuário</label>
                <input type="text" name="nome" class="form-control" placeholder="Nome completo"
                    autocomplete="off" required>
            </div>
            <div class="form-group">
                <label>E-mail</label>
                <input type="email" name="mail" class="form-control" placeholder="Seu e-mail" autocomplete="off"
                    required>
            </div>
            <div class="form-group">
                <label>Senha</label>
                <input id="txtSenha" type="password" name="senha" class="form-control" placeholder="Sua senha"
                    autocomplete="off" required>
            </div>
            <div class="form-group">
                <label>Confirmar senha</label>
                <input type="password" name="senha2" class="form-control" placeholder="Confirme sua senha"
                    autocomplete="off" required oninput="validaSenha(this)"> <!-- oninput - Execute um JavaScript quando um usuário escrever algo em um campo <input>:-->
                <small>Precisa ser igual a senha digitada acima.</small>
            </div>
            <div style="text-align:right;">
                <a href="index.php" role="button" class="btn btn-primary btn-sm">Voltar</a>
                <button class=" btn btn-sm btn-success" type="submit" id="botao">Cadastrar</button>
            </div>
        </form>

    </div>

    <script src="https://kit.fontawesome.com/cae6919cdb.js" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>


    <script>
    function validaSenha(input) {
        if (input.value != document.getElementById('txtSenha').value) {
            input.setCustomValidity('Repita a senha corretamente'); 
        } else {
            input.setCustomValidity('');
            //setCustomValidity método define a mensagem de validade customizada para o elemento de seleção para a mensagem especificada. Use a string vazia para indicar que o elemento não possui um erro de validade personalizado.
        }
    }
    </script>
</body>

</html>