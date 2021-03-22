<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PHP</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <style>
        #container {
            width: 500px;
            border-radius: 15px;
            border: 0.2em solid;
            padding: 20px;
            border-color: #cfd6dc;
            background-color:rgb(230,230,250);
        }
    </style>

</head>

<body>

    <?php 
    session_start(); //Inicie uma nova sessão ou retome a sessão existente
    $usuario = $_SESSION['usuario']; 
    if(!isset($_SESSION['usuario'])){ //Se $_SESSION['usuario'] não for declarada e for diferente de NULL:
        header('Location: index.php'); //redireciona para arquivo index.php
    }
    ?>

        <div class="container" style="margin-top: 40px" id="container">
            <h3 style="text-align:center">Formulário de cadastro </h3>
            <form action="_inserir_produto.php" method="post" style="margin-top: 20px">
                <div class="form-group">
                    <label>Nome do produto</label>
                    <input type="text" class="form-control" name="nomeproduto" placeholder="Insira o nome do produto"
                        autocomplete="off">
                </div>
                
                <div class="form-group">
                    <label>Preço do Produto</label>
                    <div class="input-group">
                        <div class="input-group-text">R$</div>
                        <input type="number" min="0.00" step="0.01" id="exampleInputAmount" class="form-control" name="numproduto" placeholder="Insira o preço do produto"
                        autocomplete="off">
                    </div>
                </div>

                <div class="form-group">
                    <label>Quantidade</label>
                    <input type="number" class="form-control" name="quantidade" placeholder="Insira a quantidade disponível"
                        autocomplete="off">
                </div>

                <div class="form-group">
                    <label>Categoria</label>
                    <select class="form-control" name="categoria">

                        <?php 
                        include 'conexao.php';

                        $sql = "SELECT * FROM `categoria` order by categoria ASC";
                        $buscar = mysqli_query($conexao,$sql);

                        while ($array = mysqli_fetch_array($buscar)) {
                            $id_categoria = $array['id_categoria'];
                            $nome_categoria = $array['categoria'];
                            
                        ?>
                        <option><?php echo $nome_categoria ?></option>

                        <?php  } ?>
                    </select>
                </div>

                <div class="form-group">
                    <label>Descrição do Produto</label>
                    <input type="text" class="form-control" name="descricaoproduto" placeholder="Insira uma breve descrição"
                        autocomplete="off">
                </div>

                <div class="form-group">
                    <label>Origem do Produto</label>
                    <select class="form-control" name="origem">

                        <?php 
                        include 'conexao.php';

                        $sql2 = "SELECT * FROM `origem`";
                        $buscar2 = mysqli_query($conexao,$sql2);

                        while ($array2 = mysqli_fetch_array($buscar2)) {
                            $id_origem = $array2['id_origem'];
                            $nom_origem = $array2['nom_origem'];
                            
                        ?>
                        <option><?php echo $nom_origem ?></option>

                        <?php  } ?>

                    </select>
                </div>

                <div class="form-group">
                    <label>Fornecedor</label>
                    <select class="form-control" name="fornecedor">

                        <?php 
                        include 'conexao.php';

                        $sql2 = "SELECT * FROM `fornecedor`";
                        $buscar2 = mysqli_query($conexao,$sql2);

                        while ($array2 = mysqli_fetch_array($buscar2)) {
                            $id_fornecedor = $array2['id_fornecedor'];
                            $nome_fornecedor = $array2['nome_fornecedor'];
                            
                        ?>
                        <option><?php echo $nome_fornecedor ?></option>

                        <?php  } ?>

                    </select>
                </div>

                <div style="text-align: right;">
                    <a href="menu.php" role="button" class="btn btn-primary btn-sm">Voltar ao menu</a>
                    <button type="submit" id="botao" class="btn btn-success btn-sm">Cadastrar</button>
                </div>
            </form>
        </div>

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
            integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
        </script>

</body>
</html>