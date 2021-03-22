<?php 

include 'conexao.php';

$id = $_POST['id'];
$numproduto = $_POST['numproduto'];
$nomeproduto = $_POST['nomeproduto'];
$categoria = $_POST['categoria'];
$quantidade = $_POST['quantidade'];
$fornecedor = $_POST['fornecedor'];
$descricao = $_POST['descricaoproduto'];
$origem = $_POST['origem'];



$sql = "UPDATE `estoque` SET `numproduto`='$numproduto',`nomeproduto`='$nomeproduto',`categoria`='$categoria',`quantidade`= '$quantidade',`fornecedor`= '$fornecedor',`descricaoproduto`= '$descricao',`origem`='$origem' WHERE id_estoque = $id";
    
$atualiza = mysqli_query($conexao,$sql);
?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<div class="container" style="width: 400px; text-align:center"></div>
    <div style="margin-top: 30px;text-align:center">
        <h3>Atualizado com sucesso!</h3>
    </div>
    <div style="margin-top: 10px;text-align:center">
        <a href="listar_produtos.php" class="btn btn-sm btn-primary">Ir para lista de produtos</a>
    </div>
</div>