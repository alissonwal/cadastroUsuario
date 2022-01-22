<?php

include_once("conexao.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$genero = $_POST['genero'];
$data_nascimento = $_POST['data_nascimento'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$endereco = $_POST['endereco'];

$sql = "insert into usuarios (nome,email,telefone,genero,data_nascimento,cidade,estado,endereco) values ('$nome','$email','$telefone','$genero','$data_nascimento','$cidade','$estado','$endereco')";

$salvar = mysqli_query($conexao,$sql);

$linhas = mysqli_affected_rows($conexao);

mysqli_close($conexao);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>Sistema de Cadastro</title>
  </head>
  <body>
    <main class="cadastro">
      <div class="container">
        <nav>
          <ul class="menu">
            <a href="index.php"><li>Cadastro</li></a>
            <a href="consulta.php"><li>Consulta</li></a>
          </ul>
        </nav>
        <section>
          <h1>Confirmação de Cadastro</h1>
          <br /><br />  

          <?php

          if($linhas == 1){
            print "Cadastro efetuado!";
          }
          
          else{
            print "Cadastro NÃO efetuado.<br>Já existe um usuário com este e-mail.";
          }

          ?>

        </section>
      </div>
    </main>
  </body>
</html>
