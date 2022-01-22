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
          <h1>Cadastro de Usuários</h1>

          <br /><br />

          <form method="post" action="processa.php">
            <input type="submit" value="Salvar" class="btn" />
            <input type="reset" value="Limpar" class="btn" />
            <br /><br />

            Nome<br />
            <input
              type="text"
              name="nome"
              class="campo"
              maxlength="40"
              required
              autofocus
            /><br />
            Email<br />
            <input
              type="email"
              name="email"
              class="campo"
              maxlength="50"
              required
            /><br />
            Telefone<br />
            <input
              type="tel"
              name="telefone"
              class="campo"
              maxlength="15"
              required
            /><br />
            Sexo<br />
            <br />
            <input
              type="radio"
              id="feminino"
              name="genero"
              value="feminino"
              required
            />
            <label for="feminino">Feminino</label>
            <input
              type="radio"
              id="masculino"
              name="genero"
              value="masculino"
              required
            />
            <label for="masculino">Masculino</label>
            <input
              type="radio"
              id="outro"
              name="genero"
              value="outro"
              required
            />
            <label for="outro">Outro</label>
            <br /><br />

            <label for="data_nascimento"><b>Data de Nascimento:</b></label>
            <input type="date" name="data_nascimento" class="campo" required />

            <br />

            Cidade<br />
            <input
              type="text"
              name="cidade"
              class="campo"
              maxlength="45"
              required
            /><br />

            Estado<br />
            <input
              type="text"
              name="estado"
              class="campo"
              maxlength="45"
              required
            /><br />

            Endereço<br />
            <input
              type="text"
              name="endereco"
              class="campo"
              maxlength="45"
              required
            /><br />
          </form>
        </section>
      </div>
    </main>
  </body>
</html>
