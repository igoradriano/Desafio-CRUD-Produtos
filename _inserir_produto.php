<?php

include 'conexao.php';


$numproduto = $_POST['numproduto']; //Recebe valor do atributo
$nomeproduto = $_POST['nomeproduto'];
$categoria = $_POST['categoria'];
$quantidade = $_POST['quantidade'];
$fornecedor = $_POST['fornecedor'];
$descricao = $_POST['descricaoproduto'];
$origem = $_POST['origem'];

$sql = "INSERT INTO `estoque`( `numproduto`, `nomeproduto`, `categoria`, `quantidade`, `fornecedor`,`descricaoproduto`,`origem`) VALUES ($numproduto,'$nomeproduto','$categoria',$quantidade,'$fornecedor','$descricao','$origem')";

$inserir = mysqli_query($conexao, $sql);
?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<div class="container" style="widith: 500px; margin-top: 30px; text-align:center">
    <h4>Produto adicionado com sucesso!</h4>
    <div style="padding-top: 20px; text-align:center">
        <a href="menu.php" role="button" class="btn btn-primary btn-sm">Voltar ao menu</a>
    </div>

</div>