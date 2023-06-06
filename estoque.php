<?php 

session_start();

// Verifique se o usuário está logado
if (!isset($_SESSION['username'])) {
    // Usuário não autenticado, redirecione para a página de login
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <link rel="icon" type="image/png" href="logo/unicampCor.png"/>
	<title>Controle Estoque</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  
    <link rel="stylesheet" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
    
	<style>
	
	body {
      margin: 0;
      padding: 0;
      font-family: sans-serif;
      background-color: rgb(0, 127, 130);

    }

    form {
      margin-top: 80px;
      margin-left: 25%;

    }

    label {
      color: rgb(0, 127,130);
    }


    /*cor das letras sem hover*/

    .w3-sidebar a {

      padding: 10px;
      margin-bottom: 10px;
      color:aliceblue;
      text-align: center;
    }


    @media (max-width: 768px) {
      .w3-sidebar {
        width: 100%;
        height: auto;
      }

      .w3-sidebar a {
        padding: 5px;
        margin-bottom: 5px;
      }
    }





    .form-row .form-group {
      padding-right: 15px;
      padding-left: 15px;
    }

    .custom-file-input {
      width: 100%;
    }

    select.form-control {
      bottom: auto;
    }


    #custom-alert {
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      background-color: rgb(10, 96, 102);
      color: rgb(0, 127, 130);
      padding: 20px;
      font-weight: bold;
      border-radius: 15px;
      text-align: center;
    }

    #custom-alert p {
      margin-bottom: 10px;
    }

    


    .w3-sidebar {
      background-color: rgb(10, 96, 102);
      text-align: center;
      width: 20%;
      position: absolute;
    }

    .w3-button:hover {
      color: black !important;
      font-weight: 700;
      background-color:rgba(161, 46, 47) !important
    }



    .form-content {
      background-color: #000;
      padding: 20px;
      border-radius: 5px;
    }

    #content {
      display: none;
    }

    body {
      margin: 0;
    }

    #p1 {
    position: absolute;
    /* define a largura máxima do formulário */
    max-width: 800px;
    /* define a margem esquerda em 15% para alinhar com a sidebar */
    margin-left: 25%;
    /* demais estilos */
    align-items: center;
    margin-top: 3cm;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
    padding: 40px;
    background-color: rgb(10, 96, 102);
    }

</style>
</head>
<body>

<!-- Sidebar -->
<div class="w3-sidebar w3- w3-bar-block" style="width:25%; text-align: center;">
   
    <h4 style="color: aliceblue;">Controle Estoque</h4>
    <hr>
    <a href="#P1" class="w3-bar-item w3-button " style="text-decoration: none;">Hidraulica &nbsp;&nbsp; 
           
       </a>
    <a href="#P2" class="w3-bar-item w3-button" style="text-decoration: none;">Elétrica &nbsp;&nbsp;&nbsp;
    </a>

    <a href="#P3" class="w3-bar-item w3-button" style="text-decoration: none;">Cabeamento &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
    </a>

    <a href="#P4" class="w3-bar-item w3-button" type="submit" style="text-decoration: none;">Estrutura (Aço,concreto,alvenaria...) &nbsp;&nbsp;&nbsp;&nbsp;
    </a>

    <a href="#P5" class="w3-bar-item w3-button" style="text-decoration: none;">Cobertura &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	</a>

    <a href="#P6" class="w3-bar-item w3-button" style="text-decoration: none;">Impermeabilidade &nbsp;&nbsp;&nbsp;&nbsp;
    </a>

    <a href="#P7" class="w3-bar-item w3-button" style="text-decoration: none;">SPDA&nbsp;&nbsp;&nbsp;&nbsp;    
    </a>

    <a href="#P8" class="w3-bar-item w3-button" style="text-decoration: none;">Pintura &nbsp;&nbsp;&nbsp;&nbsp;   
    </a>
	
	<a href="#P9" class="w3-bar-item w3-button" style="text-decoration: none;">Climatização &nbsp;&nbsp;&nbsp;&nbsp;
	</a>
	</a>
	<a href="#P10" class="w3-bar-item w3-button" style="text-decoration: none;">Pavimentação &nbsp;&nbsp;&nbsp;&nbsp;
	
	</a>
    <hr>
    <a href="index.php" class="w3-bar-item w3-button" style="text-align: center; text-decoration: none;">Voltar</a>

</div>
</body> 
<form id="#P1" style="display: none;">


  <div class="form-row">

    <div class="form-group col-md-6">
      <label for="name">Estoque Hidraulica</label>
      <div>
        <embed src="anexo.pdf" type="application/pdf" width="100%" height="600px">
      </div>

  </div>


  <script>

    // formulario da sidebar
  
    function trocarFormulario(id) {
      // ocultar todos os formulários
      var forms = document.getElementsByTagName("form");
      for (var i = 0; i < forms.length; i++) {
        forms[i].style.display = "none";
      }
  
      // exibir o formulário correto
      document.getElementById(id).style.display = "block";
    }
  
  
    // java do alert inicial 
  
    $(document).ready(function () {
      // Adiciona o evento de clique ao botão "OK"
      $('#ok-button').click(function () {
        // Exibe o conteúdo do site
        $('#site-content').css('display', 'block');
        // Oculta o alert personalizado
        $('#custom-alert').css('display', 'none');
      });
    });
  
  </script>
  


</form>
</div>
</html>