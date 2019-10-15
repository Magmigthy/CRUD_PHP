<?php

include 'conexao.php';

$categoria = $_POST['categoria'];

$sql = "INSERT INTO `categoria` (`categoria`) values ('$categoria')";
$inserir = mysqli_query($conexao, $sql);

?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<div class="container" style="width 500px; margin-top: 20px">
    <center>
    <h4>Categoria Adicionada com sucesso!</h4>
        <div style="padding-top: 20px">
        </center>
        <center>
        <a href="adicionar_categoria.php" role="button" class="btn btn-sm btn-primary">Cadastrar Nova Categoria</a>
        </center>
       </div>


</div>