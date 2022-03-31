<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Vitor Ricardo</title>
  </head>
  <body>
    <?php 
          include "conexao.php"; 
          $sql = "select * from sexo";
          try {
            $sexo = mysqli_query($conn, $sql);
          } catch (\Throwable $th) {
            echo "Erro ao realizar consulta na tabela sexo".$th;
          }
        ?>
    <div class="container">
      <div class="row">
        <div class="col">
          <h1>Cadastro</h1>
          <form action="cadastro_script.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
               <label for="nome" class="form-label">Nome Completo</label>
               <input type="texto" class="form-control" name="nome" required>
             </div>
             <div class="mb-3">
               <label for="endeco" class="form-label">Endereço</label>
               <input type="texto" class="form-control" name="endereco">
             </div>
             <div class="mb-3">
               <label for="telefone" class="form-label">Numero para contato</label>
               <input type="texto" class="form-control" name="telefone">
             </div>
             <div class="mb-3">
               <label for="email" class="form-label">Email</label>
               <input type="texto" class="form-control" name="email">
             </div>
             <div class="mb-3">
               <label for="data_nascimento" class="form-label">Data de Nascimento</label>
               <input type="date" class="form-control" name="data_nascimento">
             </div>
             <div class="mb-3">
               <label for="foto">Foto</label>
               <input type="file" class="form-control" name="foto" accept="image/*">
             </div>
             <select name="cod_sexo" class="form-select" aria-label="Default select example">
             <option value =3 selected>Informe Sexo</option>
               <?php
                 while($linha = mysqli_fetch_assoc($sexo)){
                    echo "<option value='".$linha['id']."'>".$linha['nome']."</option>";
                 }
               ?>
             </select>
             <div class="mb-3">
               <button type="submit" class="btn btn-primary">Ok!</button>
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