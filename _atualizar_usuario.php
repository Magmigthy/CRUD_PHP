<?php

include 'conexao.php';

$id = $_POST['id'];

$nomeusuario = $array['nome_usuario'];
$emailusuario = $array['email_usuario'];
$nivel = $array['nivel_usuario'];

$sql = "UPDATE `usuarios` SET `nome_usuario`='$nomeusuario', `email_usuario`='$emailusuario',
`nivel_usuario`='$nivel', WHERE id_usuario= $id";

$atualizar = mysqli_query($conexao, $sql);
?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<div class="container" style="width 400px">

<center>
    <h3>Atualizado Com Sucesso!</h3>
    <div style="margin-top: 10px"></div>
    <a href="listar_usuarios.php" class="btn btn-sm btn-warning" style="color:white">Voltar</a>
</center>

</div>