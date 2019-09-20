<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/cadastrouser.css">
    <title>Hackathon</title>
    <script src="https://kit.fontawesome.com/be184030a6.js"></script>
  </head>
  <body>
    <header>
      <?php
        include("menu.php");
       ?>
      <!-- <div class="title">
        <h1>HACKATHON</h1>
      </div> -->

      <form>
        <div class="cadastro-box">
          <h1>Cadastro</h1>

          <div class="textbox">
            <i class="fa fa-user"></i>
            <input type="text" placeholder="Nome" name="" value="">

          </div>
          <div class="textbox">
            <i class="fa fa-key"></i>
            <input type="password" placeholder="Senha" name="" value="">

          </div>
          <div class="textbox">
            <i class="fa fa-unlock-alt"></i>
            <input type="password" placeholder="Confirmar Senha" name="" value="">

          </div>
          <div class="textbox">
            <i class="fa fa-envelope" aria-hidden="true"></i>
            <input type="email" placeholder="E-mail" name="" value="">

          </div>

          <input class="btn" type="button" name="" value="Cadastrar">

        </div>

      </form>
    </header>

  </body>
</html>
