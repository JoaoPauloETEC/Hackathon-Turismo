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
            if(isset($_POST['banho'])){ 
                $banho = $_POST['banho'];

                $sql = "INSERT INTO tb_status VALUES (null, $id, $banho)";

                $query = $mysqli->query($sql);
            }
            if(isset($_POST['equipamento'])){ 
                $equipamento = $_POST['equipamento'];

                $sql = "INSERT INTO tb_status VALUES (null, $id, $equipamentos)";

                $query = $mysqli->query($sql);
            }

            header('Location: index.php');
        }
    ?>
      <form method="POST">
      <div class="cadastro-box">
        <h1>Cadastro</h1>

        <div class="checar"> 

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

      </div>

      </form>
    </header>

  </body>
</html>
