<?php
//tratar o warnning de erro https://www.totvs.com/  https://admsistemas.com.br/almoxarifado/  https://solucao.digital/?gclid=EAIaIQobChMImafKqsKf_wIVtkZIAB30Tw1pEAAYAiAAEgJLWfD_BwE


// prova cadastro de php em banco de dados https://nicepage.com/pt/modelos-html
ini_set('display_errors', 0);
set_error_handler('tratarAviso');
function tratarAviso($errno, $errstr, $errfile, $errline)
{
  // Exibir a tela bonita ao invés do aviso padrão
  include 'login.php';
  exit(); // Encerra a execução do script após exibir a tela bonita
}

session_start();

$username = $_SESSION['username'];

if (isset($_SESSION['username']) && null !== $_SESSION['level']) {

  $username = $_SESSION['username'];

  $level = $_SESSION['level'];
  $logado = true;
  // Verifica o nível de acesso do usuário e exibe os cards correspondente

  ?>
  <!DOCTYPE html>
  <html>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"></script>
    <link rel="icon" type="image/png" href="logo/unicampCor.png" />
    <title>Sistema de Almoxarifado</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="index.css" />
    <style>
      /*
          .navbar1 {
            background-color: rgb(10, 96, 102);
            color: #fff;

            padding: 0px;
            position: relative;
            display: flex;
            justify-content: space-between;
           /*teste*/
      #zoom:hover {
        transform: scale(1.1, 1.1);
      }

      .buttonred {
        color: #fff;
        background-color: rgb(212, 42, 42);
        padding: 20px 25px;
        border: none;
        border-radius: 5px;
      }

      .buttonred:hover {
        background-color: rgb(10, 96, 102);
        padding: 20px 25px;
        border: none;
        border-radius: 5px;
      }

      .form-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.7);
        z-index: 999;
        display: none;
      }

      .form-container {
        position: relative;
        z-index: 9999;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: rgb(10, 96, 102);
        padding: 20px;
        border-radius: 5px;
        width: 50%;
      }

      .form-close {
        font-size: 24px;
        display: block;
        text-align: right;
        margin-top: -10px;
        margin-right: -10px;
      }

      form {
        display: flex;
        flex-direction: column;
        gap: 10px;
      }

      label {
        font-weight: bold;
      }

      input[type="text"],
      input[type="email"],
      textarea {
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 5px;
      }

      .estilo {
        position: absolute;
        top: 0;
        left: 0;
        height: 90px;
        width: 250px;
      }

      .navbar1 {
        background-color: rgb(10, 96, 102);
        color: #fff;
        padding: 10px;
        position: relative;
        display: flex;
        justify-content: space-between;
      }

      .navbar1 button {
        position: relative;
        right: 10px;
        margin-right: 10px
      }

      .navbar-header h5 {
        margin-left: 20px;
      }

      .navbar-header {
        display: flex;
        align-items: center;
      }

      .navbar-header div {
        float: right;
      }

      body {
        margin: 0;
        padding: 0;
        font-family: sans-serif;
        background-color: rgb(0, 127, 130);

      }

      footer {
        background-color: rgb(10, 96, 102);
        padding: 20px;
        margin-top: 30px;
        display: flex;
        position: absolute;
       /* bottom: 0;*/
        width: 100%;
        justify-content: center;
        margin-bottom: 0;
      }

      .circle {
        width: 200px;
        height: 200px;
        /*border-radius: 20%;*/
        margin: 0 auto;
        overflow: hidden;
      }

      .circle img {
        width: 100%;
        height: 100%;
        object-fit: cover;
      }

      .welcome {
        text-align: center;
        font-size: 30px;
        margin-top: 10px;
        font-weight: bold;
        color: white;
      }

      .card {
        display: flex;
        flex-direction: column;
        align-items: center;
        background-color: rgb(161, 46, 47);
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        padding: 30px;
        margin: 50px;
        width: 250px;
        height: 250px;
        border-radius: 10px;
        align-content: center;
        text-align: center;
        justify-content: space-between;
      }

      .cards-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
        margin-top: 0px;
        align-self: center;
      }

      .card-title {
        font-size: 30px;
        font-weight: bold;
        margin-bottom: 10px;
        margin-top: 10px;
        margin-left: 10px;
        margin-right: 10px;
        align-items: center;
        color: white;
      }

      .cards {
        position: relative;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 700px;
        margin-top: 15px;
        color: rgb(161, 46, 47);
      }

      .card button {
        background-color: transparent;
        border: none;
      }

      svg {
        color: white;
      }
      header {
        background-color: rgb(10, 96, 102);
        padding: 20px;
        color: white;
        display: flex;
        align-items: center;
      }

      .logo-container {
        margin-right: 20px;
      }

      .logo-container img {
        max-height: 40px;
      }

      .title-container {
        display: flex;
        flex-direction: column;
      }

      .title {
        font-family: sans-serif;
        font-size: 25px;
        margin: 0;
      }

      .subtitle {
        font-size: 17px;
        margin: 0;
      }

      .logout-container {
        margin-left: auto;
      }

      .logout-button {
        background-color: #FF5F6D;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 14px;
      }

      footer {
        background-color: rgb(10, 96, 102);
        color: white;
        padding: 20px;

      }

      .footer-container {
        display: flex;
        justify-content: center;
        align-items: center;
      }

      .logo-container {
        margin: 0 10px;
      }

      .logo-container img {
        max-height: 40px;
      }

      .button-container {
        margin: 0 10px;
      }
    </style>
    <script>
      function abrirFormulario() {
        document.getElementById("form-overlay").style.display = "block";
      }

      function fecharFormulario() {
        document.getElementById("form-overlay").style.display = "none";
      }
    </script>
  </head>

  <body>
    <header>
      <div class="logo-container">
        <img src="logo/1.png" alt="Logo do Sistema Almoxarifado">
      </div>
      <div class="title-container">
        <h1 class="title">Sistema de Almoxarifado</h1>
        <h2 class="subtitle">Secretaria de Administração Regional</h2>
      </div>
      <div class="logout-container">
        <button class="buttonred" onclick="window.location.href='logout.php'">Sair</button>
      </div>
    </header>
    <!--<nav class="navbar1">
      <div class="navbar-header">
        <div class="d-flex align-items-center">
          <img src="logo/logoSarEscuro.jpeg" alt="Logo" height="100" style="margin-left:10px">
          <h3 class="mb-0 ml-2" style="margin-left: 10px;">Secretaria de Administração Regional - SAR</h3>
     

        </div>
        
      </div>
       <img class="estilo" src="https://www.virandobixo.com.br/img/unicamp.png"> 
      <button class="buttonred" onclick="window.location.href='logout.php'" >Sair</button>
    </nav>
    -->


    <div class="circle">
      <img src="logo/iconPerson.png" alt="Ícone de pessoa">
    </div>
    <h1 class="welcome">Bem-Vindo,
      <?php echo $username ?>!
    </h1>


    <div class="cards-container" class="cards">
      <?php
      if ($level == 3) {
        include 'card/cardPedidos.php';
        include 'card/cardCadastro.php';
        include 'card/cardEstoque.php';
        include 'card/cardRelatorios.php';
      } else if ($level == 2) {
        include 'card/cardCadastro.php';
        include 'card/cardEstoque.php';
      } else if ($level == 1) {
        include 'card/cardPedidos.php';
      }
}
?>
  </div>
  <footer>
    <div class="footer-container">
      <div class="logo-container">
        <img src="https://www.cotil.unicamp.br/wp-content/uploads/2023/04/logo_horizontal_ng_tra.png" alt="Logo 1">
      </div>

      <button class=" buttonred" onclick="abrirFormulario()">Contatar Desenvolvedor</button>
      <div class="form-overlay" id="form-overlay">
        <div class="form-container">
          <span class="form-close" onclick="fecharFormulario()">&times;</span>
          <h2 style="font-weight: bold; text-align: center; color: white;">Fale conosco</h2>
          <br>
          <form action="#" method="POST">
            <label for="nome" style="color: white;">Nome:</label>
            <input type="text" id="nome" name="nome" placeholder="Com quem estamos falando?" required>
            <label for="email" style="color: white;">E-mail:</label>
            <input type="email" id="email" name="email" placeholder="Para que possamos entrar em contato" required>
            <label for="mensagem" style="color: white;">Mensagem:</label>
            <textarea id="mensagem" name="mensagem" placeholder="Nos conte um pouco sobre o seu problema"
              required></textarea>

            <div class="col-12 text-center">
              <button type="submit" class="buttonred" style="line-height: 30px;">Enviar</button>
            </div>
          </form>

        </div>
      </div>


      <div class="logo-container">
        <img src="logo/unicampCor.png" alt="Logo 1">
      </div>
    </div>
  </footer>

</body>

</html>