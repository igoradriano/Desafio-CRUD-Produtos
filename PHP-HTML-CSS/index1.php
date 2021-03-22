<?php

include 'conexao.php';
include 'script/password.php';

$usuario = $_POST['usuario'];  
$senhausuario = $_POST['senha'];
// $_POST[] - Uma matriz associativa de variáveis ​​passada para o script atual por meio do método HTTP POST.

$sql = "SELECT `mail_usuario`, `senha_usuario` FROM `usuarios` WHERE `mail_usuario` = '$usuario' and `status` = 'Ativo' "; //select + nome das colunas da tabela usuarios do banco de dados.
$buscar = mysqli_query($conexao, $sql); //mysqli_query(connection, query, resultmode = MYSQLI_STORE_RESULT(padrão)) executa uma consulta em um banco de dados. $conexao vem do arquivo conexao.php

$total = mysqli_num_rows($buscar); //consulta numero de emails na base. Número de linhas

while ($array = mysqli_fetch_array($buscar)){ //mysqli_fetch_array() é uma versão extendida da função mysqli_fetch_row(). Alem de guardar os dados em índices numéricos na matriz do resultado, a função mysqli_fetch_array() pode também guardar os dados em índices associativos, usando os nomes dos campos do conjunto de resultado como chave.
    $senha = $array['senha_usuario']; //senha_usuario é um índice associativo referente ao valor passado pelo usuário

    $senhadecode = md5($senhausuario); //Calcule o hash md5 de uma string

    if ($total > 0) {
        if ($senhadecode == $senha) { //se a senha decodificada for igual a senha passada pelo usuário:

            session_start(); //Inicie uma nova sessão ou retome a sessão existente
            $_SESSION['usuario'] = $usuario; //Uma sessão é uma forma de armazenar informações (em variáveis) a serem usadas em várias páginas. Ao contrário de um cookie, a informação não é armazenada no computador do usuário.
            header('Location: menu.php'); //vá para o arquivo menu.php

        }else {  //caso a senha passada não seja igual a senha decodificada:
            header('Location: erro_senha.php'); //Redirecionamento PHP. vá para o arquivo erro_senha.php
        }

    }else{ //se o total de linhas não for maior que zero:
        header('Location: erro.php'); //vá para o arquivo erro.php
    }


}

?>