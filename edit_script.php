<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Alterção de Cadastro</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <?php
        include "conexao.php";
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $endereco = $_POST['endereco'];
        $telefone = $_POST['telefone'];
        $email = $_POST['email'];
        $data_nascimento = $_POST['data_nascimento'];

        $foto = $_FILES['foto'];
        $nome_foto = mover_foto($foto);
        if ($nome_foto == 0) {
          $nome_foto = null;
        }

        $cod_sexo = $_POST['cod_sexo'];

        if($nome_foto == null && $cod_sexo == 0){
          $sql = "UPDATE `pessoas` set `nome` = '$nome', `endereco` = '$endereco', `telefone` = '$telefone', `email` = '$email', `data_nascimento` = '$data_nascimento' WHERE cod_pessoa = $id";
        }else{
          if($cod_sexo == 0){
            $sql = "UPDATE `pessoas` set `nome` = '$nome', `endereco` = '$endereco', `telefone` = '$telefone', `email` = '$email', `data_nascimento` = '$data_nascimento', `foto` = '$nome_foto' WHERE cod_pessoa = $id";
          }else{
            if($nome_foto == null){
              $sql = "UPDATE `pessoas` set `nome` = '$nome', `endereco` = '$endereco', `telefone` = '$telefone', `email` = '$email', `data_nascimento` = '$data_nascimento', `cod_sexo` = '$cod_sexo' WHERE cod_pessoa = $id";
            }else{
              $sql = "UPDATE `pessoas` set `nome` = '$nome', `endereco` = '$endereco', `telefone` = '$telefone', `email` = '$email', `data_nascimento` = '$data_nascimento', `cod_sexo` = '$cod_sexo', `foto` = '$nome_foto' WHERE cod_pessoa = $id";
            }
          }
        }

        if (mysqli_query($conn, $sql)) {

            mensagem("$nome alterado com sucesso!",'success');
        } else
            mensagem("$nome NÃO alterado", 'danger');


        ?>
        <hr>
        <a href="index.php" class="btn btn-primary">Tela inicial</a>
        <a href="tela_de_cadastro.php" class="btn btn-success">Novo Cadastro</a>
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