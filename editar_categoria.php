<?php

include 'conexao.php';

$id = $_GET['id'];

?>
<!DOCTYPE html>

<html>
<head>
        <meta charset="utf-8">
        <title>Formulário de Edição</title>
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
        <div style="text-align: right; margin-bottom: 10px;"> 
                <a href="listar_categoria.php" class="btn btn-primary">Voltar</a>
         </div> 
            <h4>Formulário de Edição</h4>
               <form action="_atualizar_categoria.php" method="post" style="margin-top: 20px;">
                <?php
                    $sql = "SELECT * FROM `categoria` WHERE id_categoria = $id";
                    $buscar = mysqli_query($conexao,$sql);
                    while ($array = mysqli_fetch_array($buscar)) {
                        
                        $id_categoria = $array['id_categoria'];
                        $nome_categoria = $array['nome_categoria'];

                ?>
                
                <div class="form-group">
                        <input type="text" class="form-control" name="nome_categoria" value="<?php echo $nome_categoria ?>">
                        <input type="text" class="form-control" name="id" value="<?php echo $id_categoria ?>" style="display:none"
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