<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/cadastro.css">
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
          <i class="fa fa-hotel"></i>
          <input type="text" placeholder="Hotel" name="" value="" required title="Necessario um Nome" pattern="">

        </div>
        <div class="textbox">
          <i class="fa fa-map-signs"></i>
          <input type="text" placeholder="Cidade" name="" value="">

        </div>
        <div class="textbox">
          <i class="fa fa-user"></i>
          <input type="text" placeholder="Nome" name="" value="">

        </div>
        <div class="textbox">
          <i class="fa fa-tty"></i>
          <input type="text" placeholder="Telefone" name="" value="">

        </div>

        <input class="btn" type="submit" name="" value="Cadastrar">

      </div>

      </form>
    </header>

  </body>
</html>
