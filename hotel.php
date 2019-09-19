<?php
    session_start();

    $codigo = $_GET['codigo'];
    $nome = $_GET['nome'];

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

    function pegaEstrelas($estrelas){
        $array =[
            '1' => '★',
            '2' => '★★',
            '3' => '★★★',
            '4' => '★★★★',
            '5' => '★★★★★',
        ];

        return $array[$estrelas];
    }

?>
<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/hotel.css">
    <title>Hackathon</title>
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  </head>
  <body>
    <header>
      <?php
        include("menu.php");
       ?>

    </header>


      <div class="center">
        <div class="w50 left img">
          <img src="img/card1.webp" alt="">
        </div>
        <div class="clear"></div>

        <div class="right info">
          <h1 style="text-align: center;"><?php echo $nome; ?></h1>
          <p style="text-align: center;">Avenida Arpoardor, 678, 11730-000, Mongaguá-SP, Brasil</p>
          <br>
          <p style="text-align: center; font-weight: 900;">Acessibiliade</p>
          <br>

          <ul>
            <?php
                $codigo = $_GET['codigo'];
                $nome = $_GET['nome'];

                $sql = "SELECT nm_acessibilidade FROM tb_status s INNER JOIN tb_acessibilidade a ON s.id_acessibilidade = a.cd_acessibilidade WHERE S.id_hotel = $codigo";

                $query = $mysqli->query($sql);

                while($dados = $query->fetch_object()){
                    $acessibilidade = $dados->nm_acessibilidade;
            ?>
            <li><?php echo $acessibilidade; ?></li>
            <?php
                }
            ?>
          </ul>

        <div class="coment">
        <?php
            if(isset($_POST['comentar'])){
                $codigo = $_GET['codigo'];
                $nome = $_GET['nome'];

                $assunto = $_POST['assunto'];
                $comentario = $_POST['comentario'];
                $estrelas = $_POST['estrela'];

                $sql = "INSERT INTO tb_avaliacao VALUES (null, $assunto, '$comentario', $estrelas, $codigo)";

                $query = $mysqli->query($sql);
            }
        ?>
        <form method="post">
            <div class="conteudo">
                <h3>Comentario</h3>

                <br>

                <select class="tipo" name="assunto" required>
                    <option value="" disabled selected>Escolha um assunto: </option>
                    <option value="1">Quartos acessíveis para cadeira de rodas</option>
                    <option value="2">Banheiro Acessível</option>
                    <option value="3">Equipamento de Acessibilidade para Deficientes Auditivos</option>
                    <option value="4">Estacionamento Acessível</option>
                    <option value="5">Placas em Braille ou Relevo</option>
                    <option value="6">Rampa</option>
                    <option value="7">Corredores com Acessibilidade</option>
                    <option value="8">Tecnologia Assistiva</option>
                    <option value="9">Hospitalidade Inclusiva</option>
                    <option value="10">Hotelaria Adaptada</option>
                    <option value="11">Cozinha Adequada</option>
                </select>

                <textarea name="comentario" rows="4" cols="40"></textarea>

                <select class="avaliation" name="estrela" required>
                    <option value="" disabled selected>Avaliação: </option>
                    <option value="1">★</option>
                    <option value="2">★★</option>
                    <option value="3">★★★</option>
                    <option value="4">★★★★</option>
                    <option value="5">★★★★★</option>
                </select>

                <button type="submit" class="btn" name="comentar">Comentar</button>
            </div>
        </form>
        </div>
      </div>

      <div class="comentario">
        <?php
            $codigo = $_GET['codigo'];
            $nome = $_GET['nome'];

            $sql = "SELECT * FROM tb_avaliacao WHERE id_hotel = $codigo";

            $query = $mysqli->query($sql);

            while($dados = $query->fetch_object()){
                $assunto = $dados->nr_assunto;
                $comentario = $dados->ds_comentario;
                $estrelas = $dados->nr_estrela;
        ?>
            <div class="box">
            <h2><?php echo pegaAssunto($assunto); ?> - <?php echo pegaEstrelas($estrelas); ?></h2>
            <img src="img/icon.png" alt="">
            <h4>Daniel Orivaldo da Silva</h4>
            <h5>11/09/2001</h5>
            <br>
            <p><?php echo $comentario; ?></p>
            </div>
            <hr>
        <?php
            }
        ?>
     </div>
    </div>


  </body>
</html>
