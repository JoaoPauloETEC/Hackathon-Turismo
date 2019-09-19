<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/login.css">
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
        <div class="login-box">
          <h1>Login</h1>


          <div class="textbox">
            <i class="fa fa-user"></i>
            <input type="text" placeholder="Nome" name="" value="" required>

          </div>
          <div class="textbox">
            <i class="fa fa-key"></i>
            <input type="password" placeholder="Senha" name="" value="">

          </div>

          <input class="btn" type="button" name="" value="Entrar">

        </div>

      </form>
    </header>

  </body>
</html>
