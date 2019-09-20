<?php
  include('conexao.php');

  function pegaAssunto($assunto){
      $array =[
          '1' => 'Quartos acessíveis para cadeira de rodas',
          '2' => 'Banheiro Acessível',
          '3' => 'Equipamento de Acessibilidade para Deficientes Auditivos',
          '4' => 'Estacionamento Acessível',
          '5' => 'Placas em Braille ou Relevo',
          '6' => 'Rampa',
          '7' => 'Corredores com Acessibilidade',
          '8' => 'Tecnologia Assistiva',
          '9' => 'Hospitalidade Inclusiva',
          '10' => 'Hotelaria Adaptada',
          '11' => 'Cozinha Adequada',
      ];

      return $array[$assunto];
  }
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
                $rampa = $dados->sg_hotelaria;
                $hotelaria = $dados->sg_hotelaria;
                $hospitalidade = $dados->sg_hospitalidade;
                $tecnologia = $dados->sg_tecnologia;
                $quarto = $dados->sg_quarto;
                $placa = $dados->sg_placa;
                $estacionamento = $dados->sg_estacionamento;
                $equipamento = $dados->sg_equipamento;

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
                <p id="nome" style="text-align: center;">Acessiblidade</p>
                <div style="text-align: center;">
                <!--  Acessibilidade -->
                <?php
                    if($corredor != 0){
                ?>
                    <span><i class="fab fa-accessible-icon icone"></i></span>
                <?php 
                  }
                ?>

                <!--  Banho -->
                <?php
                    if($banho != 0){
                ?>
                    <span><i class="fas fa-shower icone"></i></span>
                <?php
                    }
                ?>

                <!--  Cozinha -->
                <?php
                    if($cozinha != 0){
                ?>
                    <span><i class="material-icons icone">kitchen</i></span>
                <?php
                    }
                ?>

                <!--  Hotelaria -->
                <?php
                    if($hotelaria != 0){
                ?>
                    <div>
                        <span><i class="fas fa-concierge-bell icone"></i></span>
                    </div>
                <?php
                    }
                ?>

                <!--  Tecnologia Assistiva -->
                <?php
                    if($hotelaria != 0){
                ?>
                    <div>
                        <span><i class="fas fa-microchip icone"></i></span>
                    </div>
                <?php
                    }
                ?>

                <!--  Hospitalidade Inclusiva -->
                <?php
                    if($hotelaria != 0){
                ?>
                    <div>
                        <span><i class="fas fa-clipboard-list icone"></i></span>
                    </div>
                <?php
                    }
                ?>
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
                  $corredor = $dados->sg_corredor;
                  $banho = $dados->sg_banho;
                  $cozinha = $dados->sg_cozinha;
                  $rampa = $dados->sg_hotelaria;
                  $hotelaria = $dados->sg_hotelaria;
                  $hospitalidade = $dados->sg_hospitalidade;
                  $tecnologia = $dados->sg_tecnologia;
                  $quarto = $dados->sg_quarto;
                  $placa = $dados->sg_placa;
                  $estacionamento = $dados->sg_estacionamento;
                  $equipamento = $dados->sg_equipamento;
      ?>
        <div class="wrapper">
          <a href="hotel.php?codigo=<?php echo $codigo; ?>&nome=<?php echo $nome; ?>">
            <div class="img-container">
              <img src="img/card1.webp" alt="">

              <div class="content">
              <br><br>
              <p id="titulo"><?php echo $nome." - ".$cidade; ?></p>
                <!-- <p id="nome" style="text-align: center;">Avaliado 5 Estrelas</p> -->
                <span id="nome" style="text-align: center;">Acessiblidade</span>
                <div style="text-align: center;">
                <!--  Acessibilidade -->
                <?php
                    if($corredor != 0){
                ?>
                     <div id="info">
                       <span><i class="fab fa-accessible-icon icone"></i><p id="inf">Acessiblidade</p></span>
                    </div>
                <?php 
                  }
                ?>

                <!--  Banho -->
                <?php
                    if($banho != 0){
                ?>
                    <div id="info">
                      <span><i class="fas fa-shower icone"></i><p id="inf">Banheiro Acessivel</p></span>
                    </div>
                <?php
                    }
                ?>

                

                <!--  Hotelaria -->
                <?php
                    if($hotelaria != 0){
                ?>
                    <div id="info">
                      <span><i class="fas fa-concierge-bell icone"></i><p id="inf">Hotelaria Adaptada</p></span>
                    </div>
                <?php
                    }
                ?>

                <!--  Tecnologia Assistiva -->
                <?php
                    if($tecnologia != 0){
                ?>
                   <div id="info">
                   <span><i class="fas fa-microchip icone"></i><p id="inf">Tecnologias Assistivas</p></span>
                    </div>
                <?php
                    }
                ?>

                <!--  Hospitalidade Inclusiva -->
                <?php
                    if($hospitalidade != 0){
                ?>
                   <div id="info">
                   <span><i class="fas fa-clipboard-list icone"></i><p id="inf">Hospitalidade Inclusiva</p></span>
                    </div>
                <?php
                    }
                ?>
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
