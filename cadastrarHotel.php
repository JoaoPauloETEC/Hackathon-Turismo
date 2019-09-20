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
            if(isset($_POST['corredor'])){ $corredor = 7; }else{ $corredor = 0; }
            if(isset($_POST['banho'])){ $banho = 2; }else{ $banho = 0; }
            if(isset($_POST['equipamento'])){ $equipamento = 3; }else{ $equipamento = 0;}
            if(isset($_POST['estacionamento'])){ $estacionamento = 4; }else{ $estacionamento = 0;}
            if(isset($_POST['placa'])){ $placa = 5; }else{ $placa = 0;}
            if(isset($_POST['quarto'])){ $quarto = 1; }else{ $quarto = 0;}
            if(isset($_POST['tecnologia'])){ $tecnologia = 8; }else{ $tecnologia = 0;}
            if(isset($_POST['hospitalidade'])){ $hospitalidade = 9; }else{ $hospitalidade = 0;}
            if(isset($_POST['hotelaria'])){ $hotelaria = 10; }else{ $hotelaria = 0;}
            if(isset($_POST['cozinha'])){ $cozinha = 11; }else{ $cozinha = 0;}
            if(isset($_POST['rampa'])){ $rampa = 6; }else{ $rampa = 0;}

            $sql = "INSERT INTO tb_hotel (cd_hotel, nm_hotel, nm_cidade, ds_email, nr_telefone, nm_tipo, sg_corredor, sg_banho, sg_equipamento, sg_estacionamento, sg_placa, sg_quarto, sg_tecnologia, sg_hospitalidade, sg_hotelaria, sg_cozinha, sg_rampa) VALUES (null, '$nome', '$cidade', '$email', '$telefone', '$tipo', $corredor, $banho, $equipamento, $estacionamento, $placa, $quarto, $tecnologia, $hospitalidade, $hotelaria, $cozinha, $rampa)";

            $query = $mysqli->query($sql);

            header('Location: index.php');
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
          <input type="email" placeholder="E-mail:" name="email" value="" required>
        </div>

        <select class="tipoTurismo" name="local" required>
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

        <div class="textbox">
          <i class="fa fa-tty"></i>
          <input type="tel" placeholder="Telefone:" name="telefone" value="" required>
        </div>

        <label>
            <input type="checkbox" value="2" name="banho" id="">
            Banheiro acessível:
        </label>
        <br>

        <label>
            <input type="checkbox" value="3" name="equipamento" id="">
            Equipamento de acessibilidade para deficientes auditivos:
        </label>
        <br>

        <label>
            <input type="checkbox" value="4" name="estacionamento" id="">
            Estacionamento acessível:
        </label>
        <br>

        <label>
            <input type="checkbox" value="5" name="placa" id="">
            Placas em Braille ou relevo:
        </label>
        <br>

        <label>
            <input type="checkbox" value="1" name="quarto" id="">
            Quartos acessíveis para cadeira de rodas:
        </label>
        <br>

        <label>
            <input type="checkbox" value="8" name="tecnologia" id="">
            Tecnologia Assistiva:
        </label>
        <br>

        <label>
            <input type="checkbox" value="9" name="hospitalidade" id="">
            Hospitalidade Inclusiva:
        </label>
        <br>

        <label>
            <input type="checkbox" value="10" name="hotelaria" id="">
            Hotelaria Adaptada:
        </label>
        <br>

        <label>
            <input type="checkbox" value="11" name="cozinha" id="">
            Cozinha Adequada:
        </label>
        <br>

        <label>
            <input type="checkbox" value="6" name="rampa" id="">
            Rampa acessível:
        </label>
        <br>

        <label>
            <input type="checkbox" value="7" name="corredor" id="">
            Corredores com acessibilidade:
        </label>

        <br>
        <br>

        <input class="btn" type="submit" name="cadastrar" value="Cadastrar">

      </div>

      </form>
    </header>

  </body>
</html>
