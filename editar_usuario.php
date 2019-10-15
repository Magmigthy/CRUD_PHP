<?php

include 'conexao.php';

echo $id = $_GET['id'];

?>
<!DOCTYPE html>

<html>
<head>
        <meta charset="utf-8">
        <title>Editar Usuário</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <style type="text/css"> 
            #tamanhoContainer{
                width: 500px;
            }
        </style>
</head>
    <body>
    <?php
  session_start();

  $usuario = $_SESSION['usuario'];

  if(!isset($_SESSION['usuario'])) {
    header('Location: index.php');
  }
  ?>
        <div class="container" id="tamanhoContainer" style="margin-top: 40px">
            <h4>Editar Usuário</h4>
            <div style="text-align: right; margin-bottom: 10px;"> 
                <a href="listar_usuarios.php" class="btn btn-primary">Voltar</a>
            </div> 
            <form action="_atualizar_usuario.php" method="post" style="margin-top: 20px;">
                <?php
                    $sql = "SELECT * FROM `usuarios` WHERE id_usuario = $id";
                    $buscar = mysqli_query($conexao,$sql);
                    while ($array = mysqli_fetch_array($buscar)) {
                        
                        $nomeusuario = $array['nome_usuario'];
                        $emailusuario = $array['email_usuario'];
                        $nivel = $array['nivel_usuario'];
                ?>
                

                <div class="form-group">
                    <label> Nome </label>
                    <input type="text" class="form-control" name="nomeusuario" value="<?php echo $nomeusuario ?>" disabled>
                    <input type="number" class="form-control" name="id" value="<?php echo $id ?>" style="display: none">
                </div>

                <div class="form-group">
                        <label> Email </label>
                        <input type="text" class="form-control" name="emailusuario" value="<?php echo $emailusuario ?>">
                    </div>

                <div class="form-group">
                        <label> Nível </label>
                        <select class="form-control" name="nivel">
                            <option> 1 </option>
                            <option> 2 </option>
                            <option> 3 </option>
                        </select>
                    </div>    
                
                        <div style="text-align: right;">
                        <button type="submit" class="btn btn-success btn-sm">Atualizar</button>
                        </div>
                    <?php }?>
            </form>
        </div>

        
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>