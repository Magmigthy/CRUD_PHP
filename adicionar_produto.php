<!DOCTYPE html>

<html>
<head>
        <meta charset="utf-8">
        <title>Adicionar Produto</title>
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
            <h4>Adicionar Produto</h4>
            <div style="text-align: right; margin-bottom: 10px;"> 
           <a href="menu.php" class="btn btn-primary">Voltar</a>
         </div> 
            <form action="_inserir_produto.php" method="post" style="margin-top: 20px;">
                <div class="form-group">
                    <label> Nº Produto</label>
                    <input type="number" class="form-control" name="nroproduto" placeholder="Insira o numero do produto" autocomplete="off" >
                </div>
                <div class="form-group">
                        <label> Nome Produto</label>
                        <input type="text" class="form-control" name="nomeproduto" placeholder="Insira o nome do produto" autocomplete="off">
                    </div>
                <div class="form-group">
                        <label> Categoria </label>
                        <select class="form-control" name="categoria">
                            
                        <?php
                            include 'conexao.php';
                            $sql = "SELECT * FROM categoria order by nome_categoria ASC";
                            $buscar = mysqli_query($conexao, $sql);

                            while ($array = mysqli_fetch_array($buscar)){
                                $id_categoria = $array['id_categoria'];
                                $nome_categoria = $array['nome_categoria'];
                            ?>
                            <option><?php echo $nome_categoria ?></option>
                            
                            <?php } ?>
                        </select>
                    </div>    
                <div class="form-group">
                        <label> Quantidade </label>
                        <input type="text" class="form-control" name="quantidade" placeholder="Insira a quantidade do produto" autocomplete="off">
                    </div>
                    <div class="form-group">
                            <label> Fornecedor </label>
                            <select class="form-control"name="fornecedor" >
                            
                            <?php
                            include 'conexao.php';
                            $sql = "SELECT * FROM fornecedor order by nome_forn ASC";
                            $buscar = mysqli_query($conexao, $sql);

                            while ($array = mysqli_fetch_array($buscar)){
                                $id_forn = $array['id_forn'];
                                $nome_forn = $array['nome_forn'];
                            ?>
                            <option><?php echo $nome_forn ?></option>
                            
                            <?php } ?>
                            </select>
                        </div>
                        <div style="text-align: right;">
                        <button type="submit" class="btn btn-success btn-sm">Cadastrar</button>
                        </div>
            </form>
        </div>

        
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>