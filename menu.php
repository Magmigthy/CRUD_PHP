<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <title>Menu</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/c92dddf902.js" crossorigin="anonymous"></script>
</head>
<body>
  <!-- para conferir o acesso logado  -->
  <?php
  session_start();

  $usuario = $_SESSION['usuario'];

  if(!isset($_SESSION['usuario'])) {
    header('Location: index.php');
  }
  include 'conexao.php';

  $sql = "SELECT nivel_usuario FROM usuarios WHERE email_usuario = '$usuario' and status = 'Ativo'";
  $buscar = mysqli_query($conexao, $sql);
  $array = mysqli_fetch_array($buscar);
  $nivel = $array['nivel_usuario'];
  
  ?>
      
    
      <!-- inicio do menu -->  
    <div class="container"style="margin-top: 100px;">
    <div class="row">
      <?php
      if(($nivel == 1)||($nivel == 2)) {
      ?>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Adicionar Produto</h5>
        <p class="card-text">Adicione produtos ao nosso estoque. </p>
        <a href="adicionar_produto.php" class="btn btn-primary">Adicionar produto</a>
      </div>
    </div>
  </div>
  <?php } ?>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Lista de Produtos</h5>
        <p class="card-text">Visualize, Edite e Exclua Produtos.</p>
        <a href="listar_produtos.php" class="btn btn-primary">Lista de Produtos</a>
      </div>
    </div>
  </div>
</div>
<div class="row">
<div class="col-sm-6"style="margin-top: 20px;">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Adicionar Categoria</h5>
        <p class="card-text">Adicione uma nova categoria ao sistema.</p>
        <a href="adicionar_categoria.php" class="btn btn-primary">Adicionar Categoria</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6"style="margin-top: 20px;">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Adicionar Fornecedor</h5>
        <p class="card-text">Adicione um novo fornecedor ao sistema.</p>
        <a href="adicionar_fornecedor.php" class="btn btn-primary">Adicionar Fornecedor</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6"style="margin-top: 20px;">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Aprovar Usuários</h5>
        <p class="card-text">Aprovar usuários cadastrados.</p>
        <a href="aprovar_usuario.php" class="btn btn-primary">Aprovar Usuários</a>
      </div>
    </div>
  </div>
  <?php
      if($nivel == 1) {
      ?>
  <div class="col-sm-6"style="margin-top: 20px;">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Cadastrar Usuários</h5>
        <p class="card-text">Cadastrar usuários junto ao sistema.</p>
        <a href="cadastro_usuario.php" class="btn btn-primary">Cadastrar Usuários</a>
      </div>
    </div>
  </div>
      <?php }?>
  <div class="col-sm-6"style="margin-top: 20px;">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Lista de Usuários</h5>
        <p class="card-text">Lista os usuários ativos no sistema.</p>
        <a href="listar_usuarios.php" class="btn btn-primary">Lista de Usuários</a>
      </div>
    </div>
  </div>
</div>
</div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>