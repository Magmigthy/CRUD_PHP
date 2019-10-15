<?php

include 'conexao.php';
include 'script/password.php';

$nomeusuario = $_POST['nomeusuario'];
$email = $_POST['emailusuario'];
$senha = $_POST['senhausuario'];
$nivel = $_POST['nivelusuario'];
$status = 'Ativo';
$sql = "INSERT INTO usuarios (nome_usuario,email_usuario,senha_usuario,nivel_usuario,status)
 value ('$nomeusuario', '$email', sha1('$senha'), $nivel,'$status')";

$inserir = mysqli_query($conexao, $sql);

?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<div class="container" style="width 500px; margin-top: 20px">
    <center>
    <h4>Usuário Adicionado com sucesso!</h4>
        <div style="padding-top: 20px">
        </center>
        <center>
        <a href="cadastro_usuario.php" role="button" class="btn btn-sm btn-primary">voltar</a>
        </center>
       </div>


</div>