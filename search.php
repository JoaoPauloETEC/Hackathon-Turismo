<?php
  include('conexao.php');
?>
<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/search.css">
    <title>Hotel - Pagina Inicial</title>
    <link rel="shortcut icon" type="imagem/x-icon" href="favicon.ico"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  </head>
  <body>
    <header>
      <?php
        include("menu.php");
       ?>
      <div class="title">
        <h1>HACKATHON</h1>
      </div>
      <div class="pesc">
        <form method="post">
          <select class="local" name="local" required>
              <option value="" disabled selected>Escolha uma Cidade: </option>
              <option value="Santos">Santos</option>
              <option value="São Vicente">São Vicente</option>
              <option value="Praia Grande">Praia Grande</option>
              <option value="Mongaguá">Mongaguá</option>
              <option value="Itanhaém">Itanhaém</option>
              <option value="Peruibe">Peruibe</option>
              <option value="Bertioga">Bertioga</option>
              <option value="Guarujá">Guarujá</option>
          </select>
          <button class="btn1" type="submit" name="pesquisar">Pesquisar  <i class="fas fa-search-location"></i></button>
        </form>
      </div>

    </header>

    <br><br><br>

    <center>
      <?php
        if(isset($_POST['pesquisar']))
        {
            $cidade = $_POST['local'];

            $sql = "SELECT * FROM tb_hotel WHERE nm_cidade = '$cidade'";

            $query = $mysqli->query($sql);

            while($dados = $query->fetch_object())
            {
                $codigo = $dados->cd_hotel;
                $nome = $dados->nm_hotel;
                $cidade = $dados->nm_cidade;
                $corredor = $dados->sg_corredor;
                $banho = $dados->sg_banho;
                $cozinha = $dados->sg_cozinha;
                $hotelaria = $dados->sg_hotelaria;
      ?>
        <div class="wrapper">
          <a href="hotel.php?codigo=<?php echo $codigo; ?>&nome=<?php echo $nome; ?>">
            <div class="img-container">
              <img src="img/card1.webp" alt="">

              <div class="heart">
              </div>

              <div class="content">
                <span><?php echo $nome." - ".$cidade; ?></span>
                <!-- <p id="nome" style="text-align: center;">Avaliado Estrelas</p> -->
                <p id="nome" style="text-align: center;">Acessiblidade: </p>
                <div style="text-align: center;">
                <!--  Acessibilidade -->
                </div>
              </div>
            </div>
          </a>
        </div>
      <?php
            }
        }
      ?>
    </center>

    <center>
      <?php
          if(!isset($_POST['local']))
          {
              $sql = "SELECT * FROM tb_hotel";

              $query = $mysqli->query($sql);

              while($dados = $query->fetch_object())
              {
                  $codigo = $dados->cd_hotel;
                  $nome = $dados->nm_hotel;
                  $cidade = $dados->nm_cidade;
      ?>
        <div class="wrapper">
          <a href="hotel.php?codigo=<?php echo $codigo; ?>&nome=<?php echo $nome; ?>">
            <div class="img-container">
              <img src="img/card1.webp" alt="">

              <div class="heart">
              </div>

              <div class="content">
                <span><?php echo $nome; ?></span>
                <!-- <p id="nome" style="text-align: center;">Avaliado 5 Estrelas</p> -->
                <p id="nome" style="text-align: center;">Acessiblidade: </p>
                <div style="text-align: center;">
                </div>
              </div>
            </div>
          </a>
        </div>
      <?php
              }
          }
      ?>
    </center>

  </body>
</html>
