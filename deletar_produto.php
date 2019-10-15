<?php

include 'conexao.php';
$id = $_GET ['id'];

$sql = "DELETE FROM `estoque` WHERE id_estoque = $id";
$deletar = mysqli_query($conexao, $sql);

?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<div class="container" style="width 400px">

<center>
    <h3>Excuido Com Sucesso!</h3>
    <div style="margin-top: 10px"></div>
    <a href="listar_produtos.php" class="btn btn-sm btn-danger" style="color:white">Voltar</a>
</center>

</div>