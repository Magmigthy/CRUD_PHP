<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <title>Cadastro Usuário</title>
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
    <div class="container" style="width: 400px; margin-top:40px">
    <div style="text-align: right; margin-bottom: 10px;"> 
           <a href="menu.php" class="btn btn-sm btn-primary">Voltar</a>
         </div> 
        <h4>Cadastro de Usuário</h4>
        <form action="_inserir_usuario.php" method="post">
            <div class="form-group">
                <label>Nome do Usuário</label>
                <input type="text" name="nomeusuario" class="form-control" required autocomplete="off" placeholder="Nome">
            </div>
            <div class="form-group">
                <label>E-mail</label>
                <input type="email" name="emailusuario" class="form-control" required autocomplete="off" placeholder="Seu E-mail">
            </div>
            <div class="form-group">
                <label>Senha</label>
                <input type="password" id="txtSenha" name="senhausuario" class="form-control" required autocomplete="off" placeholder="Senha">
            </div>
            <div class="form-group">
                <label>Repetir Senha</label>
                <input type="password" name="senhausuario2" class="form-control" required autocomplete="off" placeholder="Repita a Senha" oninput="validaSenha(this)">
                <small>Precisa ser igual a senha digitada acima.</small>
            </div>
            <div class="form-group">
                <label>Nível De Acesso</label>
                <select name="nivelusuario" class="form-control">

                    <option value="1">Administrador</option>
                    <option value="2">Usuário</option>
                    <option value="3">Conferente</option>

                </select>

            </div>

            <div style="text-align:right">
                <button type="submit" class="btn btn-sm btn-success">Cadastrar</button>
            </div>
        </form>

    </div>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- script JS para validar se a senha da repetição é a mesma da digitada inicialmente -->
    <script>
    function validaSenha(input){
        if (input.value != document.getElementById('txtSenha').value) {
            input.setCustomValidity('Repita a senha corretamente');
        } else {
            input.setCustomValidity('');
        }
        }
    </script>

</body>

</html>