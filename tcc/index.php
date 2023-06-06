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
    <link rel="stylesheet" href="index.css">
    <style>
      

.navbar1 {
  background-color: rgb(10, 96, 102);
  color: #fff;

  padding: 0px;
  position: relative;
  display: flex;
  justify-content: space-between;
 
  
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
    <nav class="navbar1">
      <div class="navbar-header">
        <div class="d-flex align-items-center">
          <img src="logo/logoSarEscuro.jpeg" alt="Logo" height="100" style="margin-left:10px">
          <h3 class="mb-0 ml-2" style="margin-left: 10px;">Secretaria de Administração Regional - SAR</h3>
     

        </div>
        
      </div>
      <!-- <img class="estilo" src="https://www.virandobixo.com.br/img/unicamp.png"> -->
      <button class="buttonred" onclick="window.location.href='logout.php'" >Sair</button>
    </nav>

    <br>
    
    <div class="circle">
      <img src="logo/unicampCor.png">
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
  </footer>

</body>

</html>