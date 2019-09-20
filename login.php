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
      <?php
        session_start();
        include('conexao.php');

        if(isset($_POST['entrar'])){
          $login = $_POST['login'];
          $senha = $_POST['senha'];

          $sql = "SELECT * FROM tb_usuario WHERE nm_usuario = '$login' AND ds_senha = '$senha'";

          $query = $mysqli->query($sql);

          $total = mysqli_num_rows($query); 
          if($total != 0)
          {
              $_SESSION['usuarioLogado'] = true;

              echo "<script> alert('Cadastrado com sucesso'); </script>";

              header('Location: index.php');
          }else{
              echo "<script> alert('Não foi possível cadastrar usuário'); </script>";
              $_SESSION['usuarioLogado'] = false;
          }
        }
      ?>
      <form method="post">
        <div class="login-box">
          <h1>Login</h1>


          <div class="textbox">
            <i class="fa fa-user"></i>
            <input type="text" placeholder="Nome" name="login" value="" required>

          </div>
          <div class="textbox">
            <i class="fa fa-key"></i>
            <input type="password" placeholder="Senha" name="senha" value="">

          </div>

          <input class="btn" type="submit" name="entrar" value="Entrar">

        </div>

      </form>
    </header>

  </body>
</html>
