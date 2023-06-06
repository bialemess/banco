<?php
session_start();
$users = array(
  array("username" => "admin", "password" => "1234", "level" => 3),
  array("username" => "user2", "password" => "user123", "level" => 2),
  array("username" => "user1", "password" => "user456", "level" => 1)
);
// Verifica se o formulário foi enviado
if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  // Verifica se o usuário existe no array de usuários
  foreach ($users as $user) {
    if ($user['username'] == $username && $user['password'] == $password) {
      // Cria uma sessão para o usuário
      $_SESSION['username'] = $user["username"];
      $_SESSION['level'] = $user["level"];
      header('Location: index.php');
      exit;

      

    }
  }
  // Se chegou aqui, é porque o usuário não existe ou a senha está incorreta
  $error = "Usuário ou senha incorretos!";
}
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Login</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
  <link rel="icon" type="image/png" href="logo/unicampCor.png"/>

  <style>
      body {
    margin: 0;
    padding: 0;
    overflow: hidden;
    background: linear-gradient(45deg, #0a6066, #007f82, #96989a, #d42a2a, #a12e2f, #fff);
    background-size: 300% 300%;
    animation: gradientAnimation 10s ease infinite;
}

@keyframes gradientAnimation {
    0% {
        background-position: 0% 50%;
    }
    50% {
        background-position: 100% 50%;
    }
    100% {
        background-position: 0% 50%;
    }
}

h1 {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    font-family: Arial, sans-serif;
    font-size: 36px;
    color: white;
}
    body {
      background-color: rgb(10, 96, 102);
      font-family: sans-serif;
    }

    #container-geral {
      border-radius: 10px;
      border: none;
      background-color: rgb(0, 127, 130);
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);

    }

    .logo {
      display: flex;
      justify-content: center;
      margin-top: 25px;
      
      }

    .logo img {
      max-width: 250px;
      height: auto;
    }

    .form-container {
      /*background-color: #fff;*/
      border-radius: 5px;
      /*box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);*/
      padding: 20px;
      margin-top: 0px;
      max-width: 400px;
    }

    .form-container label {
      display: block;
      font-size: 14px;
      font-weight: bold;
      margin-top: 10px;
      color: #fff;
    }

    .form-container p {
      display: block;
      font-size: 14px;
      font-weight: bold;
      margin-top: 10px;
      color: #fff;
    }

    .form-container input[type="text"],
    .form-container input[type="password"] {
      border-radius: 3px;
      border: none;
      padding: 10px;
      margin-top: 5px;
      margin-bottom: 15px;
      width: 100%;
    }

    .form-container button[type="submit"] {
      background-color: rgb(161, 46, 47);
      border: none;
      border-radius: 3px;
      color: #fff;
      cursor: pointer;
      font-size: 16px;
      font-weight: bold;
      padding: 10px;
      margin-top: 10px;
      width: 100%;
    }

    .form-container button[type="submit"]:hover {
      background-color: #8B0000;
    }

    .forgot-password {
      text-align: center;
      margin-top: 15px;
      font-size: 14px;
    }

    .forgot-password a {
      color: #fff;
      text-decoration: none;
    }

    .forgot-password a:hover {
      text-decoration: underline;
    }
  </style>
</head>

<body>
  <div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="row" id="container-geral">
      <div class="col-6">
        <div class="logo">
          <img src="logo/unicamp.png" alt="Logo da UNICAMP">
        </div>
      </div>
      <div class="col-6">
        <div class="form-container">
          
          <?php if (isset($error)) { ?>
            <p>
              <?php echo $error; ?>
            </p>
          <?php } ?>

          <form method="post">
            <label for="username">E-mail</label>
            <input type="text" id="username" name="username" placeholder="Digite seu e-mail">

            <label for="password">Senha:</label>
            <input type="password" id="password" name="password" placeholder="Digite sua senha">

            <button type="submit" id="submit" name="submit">Entrar</button>
            <div class="forgot-password">
              <a href="esqueciSenha.php">Esqueci minha senha</a>
            </div>
          </form>
        </div>
      </div>
    </div>


  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</body>

</html>