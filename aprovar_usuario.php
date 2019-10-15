<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <title>Aprovar Usuário</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/c92dddf902.js" crossorigin="anonymous"></script>
    </head>
    <body>
    <?php
  session_start();

  $usuario = $_SESSION['usuario'];

  if(!isset($_SESSION['usuario'])) {
    header('Location: index.php');
  }
  ?>
        <div class="container" style="margin-top: 40px;" >
        <h3>Lista de Usuários</h3>
       <div style="text-align: right; margin-bottom: 10px;"> 
           <a href="menu.php" class="btn btn-primary">Voltar</a>
         </div> 
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Nível</th>
                        <th scope="col">Ação</th>
                    </tr>
                </thead>
                   <tr>
                        <?php
                            include 'conexao.php';
                            $sql = "SELECT * FROM `usuarios` WHERE status = 'inativo'";
                            $busca = mysqli_query($conexao,$sql);

                            while ($array = mysqli_fetch_array($busca)) {
                                
                                $id_usuario = $array['id_usuario'];
                                $nomeusuario = $array['nome_usuario'];
                                $email = $array['email_usuario'];
                                $nivel = $array['nivel_usuario'];
                                
                                ?>
                    <tr>
                        <td><?php echo $nomeusuario ?></td>
                        <td><?php echo $email ?></td>
                        <td><?php echo $nivel ?></td>
                       
                        <td>
                            <a class="btn btn-success btn-sm" href="_aprovar_usuario.php?id=<?php echo $id_usuario?>&nivel=1" 
                            role="button" style="color:white"><i class="fas fa-check"></i> Administrador</a>
                            <a class="btn btn-warning btn-sm" href="_aprovar_usuario.php?id=<?php echo $id_usuario?>&nivel=2" 
                            role="button" style="color:white"><i class="fas fa-check"></i> Funcionário</a>
                            <a class="btn btn-secondary btn-sm" href="_aprovar_usuario.php?id=<?php echo $id_usuario?>&nivel=3" 
                            role="button" style="color:white"><i class="fas fa-check"></i> Conferente</a>        
                            <a class="btn btn-danger btn-sm" href="_deletar_usuario.php?id=<?php echo $id_usuario?>&nivel=<?php echo $nivel?>" 
                            role="button" style="color:white"><i class="far fa-trash-alt"></i> Excluir</a>    

                        </td>
                    </tr>
                    <?php } ?>
                    </tr>
            </table>

        </div>
        
    
    
    
    
    
    
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>