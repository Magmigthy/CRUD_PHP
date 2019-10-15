<?php

include 'conexao.php';


$id = $_GET['id'];
$nivel = $_GET['nivel'];

if ($nivel == 1) {

    $update = "UPDATE usuarios SET status = 'Ativo', nivel_usuario = 1 WHERE id_usuario = $id";
    $atualizacao = mysqli_query($conexao,$update);
}

if ($nivel == 2) {

    $update = "UPDATE usuarios SET status = 'Ativo', nivel_usuario = 2 WHERE id_usuario = $id";
    $atualizacao = mysqli_query($conexao,$update);
}

if ($nivel == 3) {

    $update = "UPDATE usuarios SET status = 'Ativo', nivel_usuario = 3 WHERE id_usuario = $id";
    $atualizacao = mysqli_query($conexao,$update);
}

?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<div class="container" style="width 400px">

<center>
    <h3>Cadastrado Com Sucesso!</h3>
    <div style="margin-top: 10px"></div>
    <a href="aprovar_usuario.php" class="btn btn-sm btn-warning" style="color:white">Voltar</a>
</center>

</div>