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

    <?php
        include('conexao.php');
        if(isset($_POST['cadastrar']))
        {
            $nome = $_POST['nome'];
            $cidade = $_POST['cidade'];
            $email = $_POST['email'];
            $telefone = $_POST['telefone'];
            $tipo = $_POST['tipo'];

            $sql = "INSERT INTO tb_hotel (cd_hotel, nm_hotel, nm_cidade, ds_email, nr_telefone, nm_tipo) VALUES (null, '$nome', '$cidade', '$email', '$telefone', $tipo)";

            $query = $mysqli->query($sql);

            header('Location: opHotel.php');
        }
    ?>
      <form method="POST">
      <div class="cadastro-box">
        <h1>Cadastro</h1>

        <div class="textbox">
          <select class="tipoTurismo" name="tipo" required>
            <option value="" disabled selected>Tipo de Cadastro</option>
            <option value="Hotel">Hotel</option>
            <option value="Ponto Turistico">Ponto Turístico</option>
            <option value="Restaurantes">Restaurante</option>
            <option value="Mercados">Mercados</option>
          </select>
        </div>

        <div class="textbox">
          <i class="fa fa-hotel"></i>
          <input type="text" placeholder="Nome:" name="nome" value="" required>
        </div>

        <div class="textbox">
          <i class="fa fa-map-signs"></i>
          <input type="email" placeholder="E-mail:" name="email" value="">
        </div>

        <div class="textbox">
          <i class="fa fa-map-signs"></i>
          <input type="text" placeholder="Cidade:" name="cidade" value="">
        </div>

        <div class="textbox">
          <i class="fa fa-tty"></i>
          <input type="tel" placeholder="Telefone:" name="telefone" value="">
        </div>

        <br>

        <input class="btn" type="submit" name="cadastrar" value="Avançar">

      </div>

      </form>
    </header>

  </body>
</html>
