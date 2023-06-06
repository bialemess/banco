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
	<title>Formulário</title>
	<style>
	body {
		margin: 0;
		padding: 0;
		font-family: Arial, sans-serif;
		background-color: rgb(0, 127, 130);
	}
	.navbar1 {
		background-color: rgb(10, 96, 102);
		color: #fff;
		padding: 1px;
		position: relative;
		display:contents;
		justify-content: space-between;
	}
	.navbar1 button {
		position: absolute;
		top: 10px;
		right: 10px;
		margin-right: 10px
	}
	.navbar-header h5{
		margin-left: 20px;
	}
	.navbar-header{
		display: flex;
		align-items: center;
	}
	.navbar-header div {
		float: right;
	}
	form {
		margin: 50px;
		padding: 20px;
		background-color: rgb(0, 127, 130);
		border-radius: 10px;
		box-shadow: 0px 0px 10px 0px rgb(255, 255, 255);
	}
	form label {
		display: block;
		margin-top: 10px;
		margin-bottom: 5px;
		font-weight: bold;
	}
	form input, form select {
		width: 100%;
		padding: 10px;
		border: none;
		border-radius: 5px;
		margin-bottom: 20px;
		font-size: 16px;
	}
	form textarea {
		width: 100%;
		padding: 10px;
		border: none;
		border-radius: 5px;
		margin-bottom: 20px;
		font-size: 16px;
		resize: none;
	}
	
	.buttonred {
	  color: #fff;
	  background-color: rgb(10, 96, 102);
	
	  padding: 20px 25px;
	  border: none;
	  border-radius: 5px;
	}
	.buttonred:hover {
	  background-color: rgb(212, 42, 42);
	  padding: 20px 25px;
	  border: none;
	  border-radius: 5px;
	}
	form button {
		background-color: rgb(10, 96, 102);
		color: #fff;
		border: none;
		border-radius: 5px;
		padding: 10px 20px;
		font-size: 16px;
		cursor: pointer;
	}
	/*CSS DATAS*/
	
	h1 {
  text-align: center;
}

.delivery-date {
  display: flex;
  justify-content: center;
  align-items: center;
  margin-top: 20px;
}

.delivery-date label {
  margin-right: 10px;
}

.delivery-date input[type="date"] {
  padding: 8px;
  font-size: 16px;
  border-radius: 4px;
  border: 1px solid #ccc;
}

.delivery-date input[type="date"]::before {
  content: attr(placeholder);
  color: #999;
}

.delivery-date input[type="date"]:focus::before,
.delivery-date input[type="date"]:valid::before {
  display: none;
}

.delivery-date input[type="submit"] {
  padding: 10px 20px;
  background-color: rgb(212, 42, 42);
  color: #fff;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  font-size: 16px;
}
.estilo{
	color: #ffffff;

}
	</style>
</head>
<body>
	<nav class="navbar1">
		<div class="navbar-header">
	
	
	
	<img class="estilo" src="https://www.virandobixo.com.br/img/unicamp.png"> 
	
		</div>
		<button class="buttonred" onclick="window.location.href='./'">Voltar</button>
	
	</nav>
  <br><br>
	<form class="estilo">
		<h1 >Relatório</h1>
		<label for="nome">Id do usuário:</label>
		<input type="text" id="nome" name="nome" placeholder="Digite seu nome" required>
    <label for="relatorio">Especificações:</label>
		<select id="relatorio" name="relatorio">
      
			<option value="mensal">Hidraulica</option>
			<option value="semestral">Elétrica</option>
      <option value="semestral">Cabeamento</option>
      <option value="semestral">Estrutura (Aço,concreto,alvenaria...)</option>
      <option value="semestral">Cobertura</option>
      <option value="semestral">Impermeabilidade</option>
      <option value="semestral">SPDA</option>
      <option value="semestral">Pintura</option>
      <option value="semestral">Climatização</option>
      <option value="semestral">Pavimentação</option>
      
		</select>
		
		<label for="Periodo">Periodo:</label>
		<select id="Periodo" name="Periodo">
			<option value="mensal">Mensal</option>
			<option value="semestral">Semestral</option>
		</select>
		<input type="submit" value="Solicitar">
	</form>
</body>
</html>