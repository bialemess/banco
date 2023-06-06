

<!DOCTYPE html>
<html>
<head>
<link rel="icon" type="image/png" href="../logo/unicampCor.png"/>
	<title>Situação do Pedido</title>
	<style>
		/* Define as cores da barra de progresso */
		.progress-bar {
			background-color: rgb(150, 152, 154);
			height: 20px;
			position: relative;
			margin-bottom: 20px;
		}

		.progress-bar span {
			background-color: rgb(150, 152, 154);
			display: block;
			height:  72%;
			position: absolute;
			top: 0;
			left: 0;
			padding: 3px;
			color: white;
			font-weight: bold;
		}
         /*Mudança de cor para vermelho */
        .slider label:hover {
                 color: #ddd;
                 background-color: rgb(161, 46, 47);
       }
       
			
		
		/* Define os estilos para cada status */
		.progress-bar--feito span {
			background-color: #136e16;
		}

		.progress-bar--andamento span {
			background-color: #b8942a;
		}

		.progress-bar--pendente span {
			background-color: #9c1e15;
		}

		/* Define os estilos para o slider */
		.slider {
			width: 50%;
			margin: 0 auto;
			overflow: hidden;
		}

		.slider input[type=radio] {
			display: none;
		}

		.slider label {
			display: inline-block;
			background-color: #ddd;
			padding: 10px 20px;
			font-weight: bold;
			color: #666;
			text-align: center;
			border-radius: 5px;
			cursor: pointer;
			margin-right: -4px;
		}

		.slider input[type=radio]:checked + label {
			background-color: rgb(0, 127, 130);
			color: white;
		}
        body {
	background-color: rgb(0, 127, 130);
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
		padding: 45px;
		position: relative;
		display: flex;
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
		body {
		margin: 0;
		padding: 0;
		font-family: Arial, sans-serif;
		background-color: rgb(0, 127, 130);
		}
		footer {
		background-color: rgb(10, 96, 102);
		padding: 20px;
		margin-top: 50px;
		display: flex;
		justify-content: center;
		}
		#logosar{
		width: 100px;
		height: 100%;
		}
		.circle {
		width: 200px;
		height: 200px;
		border-radius: 20%;
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
        .text{
		  font-size: px;
          align-items: center;
          margin: 0;
          color: white;
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
.cards-container {
          display: flex;
          flex-wrap: wrap;
          justify-content: center;
          align-items: center;
          margin-top: 40px;
          flex-direction: column;
          align-self: center;
        }
	</style>
</head>

<body>
	
  <!--navbar-->

  <nav class="navbar1">
    <div class="navbar-header">



<img class="estilo" src="https://www.virandobixo.com.br/img/unicamp.png"> 

    </div>
  
                <button class="buttonred" onclick="window.location.href='../pedidos.php'">Voltar</button>

</nav>

<div class="cards-container">
	<img src="../logo/logoUnicamp.png" alt="Minha imagem">
	<div class="text">
	
	</div>
</div>


	<!-- Adiciona o slider com as opções de pedido -->
	<div class="slider">
		<input type="radio" name="pedido" id="feito" value="feito" checked>
		<label for="feito">Concluido</label>

		<input type="radio" name="pedido" id="andamento" value="andamento">
		<label for="andamento">Em andamento</label>

		<input type="radio" name="pedido" id="pendente" value="pendente">
		<label for="pendente">Pendente</label>
	</div>

	<!-- Crie a barra de progresso para cada pedido e mostre apenas a barra de progresso do pedido selecionado -->
	<div class="progress-bar progress-bar--feito" id="feito-progress">
		<span>Pedido Concluido</span>
	</div>

	<div class="progress-bar progress-bar--andamento" id="andamento-progress" style="display:none;">
		<span>Pedido em andamento</span>
	</div>

	<div class="progress-bar progress-bar--pendente" id="pendente-progress" style="display:none;">
		<span>Pedido pendente</span>
	</div>

	<!-- Adicione o script para exibir a barra de progresso do pedido selecionado -->
	<script>
        const feitoProgress = document.getElementById('feito-progress');
        const andamentoProgress = document.getElementById('andamento-progress');
        const pendenteProgress = document.getElementById('pendente-progress');
    
        const slider = document.querySelector('.slider input[type=radio]:checked');
        if (slider) {
            switch (slider.value) {
                case 'feito':
                    feitoProgress.style.display = 'block';
                    break;
                case 'andamento':
                    andamentoProgress.style.display = 'block';
                    break;
                case 'pendente':
                    pendenteProgress.style.display = 'block';
                    break;
            }
        }
    
        document.querySelectorAll('.slider input[type=radio]').forEach((input) => {
            input.addEventListener('change', () => {
                feitoProgress.style.display = 'none';
                andamentoProgress.style.display = 'none';
                pendenteProgress.style.display = 'none';
    
                switch (input.value) {
                    case 'feito':
                        feitoProgress.style.display = 'block';
                        break;
                    case 'andamento':
                        andamentoProgress.style.display = 'block';
                        break;
                    case 'pendente':
                        pendenteProgress.style.display = 'block';
                        break;
                }
            });
        });
    </script>