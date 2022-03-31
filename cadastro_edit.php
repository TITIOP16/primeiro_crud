<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Alteração de Cadastro</title>
  </head>
  <body>

    <<?php


      include "conexao.php";
      $id = $_GET['id'] ?? '';
      $sql = "SELECT * FROM pessoas WHERE cod_pessoa = $id";

      $dados = mysqli_query($conn, $sql);
      $linha = mysqli_fetch_assoc($dados);
      $sql = "SELECT * FROM sexo";
      $sexo = mysqli_query($conn, $sql);


     ?>
    <div class="container">
      <div class="row">
        <div class="col">
          <h1>Cadastro</h1>
          <form action="edit_script.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
               <label for="nome" class="form-label">Nome Completo</label>
               <input type="texto" class="form-control" name="nome" required value="<?php echo $linha['nome'];  ?>">
             </div>
             <div class="mb-3">
               <label for="endeco" class="form-label">Endereço</label>
               <input type="texto" class="form-control" name="endereco" value="<?php echo $linha['endereco'];  ?>">
             </div>
             <div class="mb-3">
               <label for="telefone" class="form-label">Numero para contato</label>
               <input type="texto" class="form-control" name="telefone" value="<?php echo $linha['telefone'];  ?>">
             </div>
             <div class="mb-3">
               <label for="email" class="form-label">Email</label>
               <input type="texto" class="form-control" name="email" value="<?php echo $linha['email'];  ?>">
             </div>
             <div class="mb-3">
               <label for="data_nascimento" class="form-label">Data de Nascimento</label>
               <input type="date" class="form-control" name="data_nascimento" value="<?php echo $linha['data_nascimento'];  ?>">
             </div>
             <div class="mb-3">
               <label for="foto">Foto</label>
               <input type="file" class="form-control" name="foto" accept="image/*">
             </div>
             <select name="cod_sexo" class="form-select" aria-label="Default select example">
             <option value =0 selected>Alterar sexo</option>
              <?php
                while($linha1 = mysqli_fetch_assoc($sexo)){
                    echo "<option value='".$linha1['id']."'>".$linha1['nome']."</option>";
                }
              ?>
             </select>
             <div class="mb-3">
               <button type="submit" class="btn btn-primary" value="Salvar Alteração">Salvar Alterações</button>
               <input type="hidden" name="id" value="<?php echo $linha['cod_pessoa'];  ?>">
             </div>
          </form>
          <a href="index.php" class="btn btn-info"> Voltar</a>
        </div>
      </div>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>



    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>