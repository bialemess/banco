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
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
    <link rel="icon" type="image/png" href="logo/unicampCor.png"/>
    <title>Menu</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="index.css">

</head>
<style>
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
        font-family: Arial, sans-serif;
        background-color: rgb(0, 127, 130);

      }

      footer {
        background-color: rgb(10, 96, 102);
        padding: 20px;
        margin-top: 30px;
        display: flex;
        justify-content: center;
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
        font-size: 20px;
        margin: 0;
      }

      .subtitle {
        font-size: 14px;
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
<body>
  <nav class="navbar1">
    <div class="navbar-header">
        <img class="estilo" src="https://www.virandobixo.com.br/img/unicamp.png"> 
    </div>
    <button class="buttonred" onclick="window.location.href='index.php'">Voltar</button>
 </nav>
    <br>
    <br>
    <div class="circle">
        <img src="logo/logoUnicamp.png">
    </div>
    <br>

    <div class="cards-container" class="cards">
        <div class="card">
            <h2 class="card-title">Cadastro</h2>
            <p style="text-align: center; color: white;">Aqui você pode realizar os pedidos</p>
            <button onclick="window.location.href='pedido/cadPedido.php'">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-patch-plus-fill"
                    viewBox="0 0 16 16" style="align-items: center;">
                    <path d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01-.622-.636zM8.5 6v1.5H10a.5.5 0 0 1 0 1H8.5V10a.5.5 0 0 1-1 0V8.5H6a.5.5 0 0 1 0-1h1.5V6a.5.5 0 0 1 1 0z" />
                </svg>
            </button>
        </div>
  
        <div class="card">
            <h2 class="card-title">Status</h2>
             <p style="text-align: center; color: white;">Aqui você pode verificar o status do pedido</p>';
            <button onclick="window.location.href='pedido/statusPedido.php'">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-patch-plus-fill"
                  viewBox="0 0 16 16" style="align-items: center;">
                  <path d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01-.622-.636zM8.5 6v1.5H10a.5.5 0 0 1 0 1H8.5V10a.5.5 0 0 1-1 0V8.5H6a.5.5 0 0 1 0-1h1.5V6a.5.5 0 0 1 1 0z" />
                </svg>
            </button>
        </div>
  </div>

</body>
</html>
