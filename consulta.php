<?php

include_once("conexao.php");

$filtro = isset($_GET['filtro'])?$_GET['filtro']:"";

$sql = "select * from usuarios where nome like '%$filtro%'";
$consulta = mysqli_query($conexao,$sql);
$registros = mysqli_num_rows($consulta);

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
          <h1>Consulta</h1>
          <br /><br />  

          <form method="get" action="">
            Filtar por nome: <input type="text" name="filtro" class="campo" required autofocus>
            <input type="submit" value="Pesquisar" class="btn">

          <?php

          print "Resultado da pesquisa com a palavra <strong>$filtro</strong><br><br>";

          print "$registros registros encontrados.";

          print "<br><br>";

          while($exibirRegistros = mysqli_fetch_array($consulta)){

              $codigo = $exibirRegistros[0];
              $nome = $exibirRegistros[1];
              $email = $exibirRegistros[2];
              $telefone = $exibirRegistros[3];
              $genero = $exibirRegistros[4];
              $data_nascimento = $exibirRegistros[5];
              $cidade = $exibirRegistros[6];
              $estado = $exibirRegistros[7];
              $endereco = $exibirRegistros[8];

              print "<article>";

              print "$codigo<br>";
              print "$nome<br>";
              print "$email<br>";
              print "$telefone<br>";
              // print "$genero<br>";
              // print "$data_nascimento<br>";
              // print "$cidade<br>";
              // print "$estado<br>";
              // print "$endereco";      

              print "</article>";

          }

          mysqli_close($conexao);

          ?>

        </section>
      </div>
    </main>
  </body>
</html>