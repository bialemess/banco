<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<style>
   body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
}

header {
    background-color: #333;
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

</style>

<body>
    <header>
        <div class="logo-container">
            <img src="logo/unicamp.png" alt="Logo do Sistema Almoxarifado">
        </div>
        <div class="title-container">
            <h1 class="title">Sistema de Almoxarifado</h1>
            <h2 class="subtitle">Secretaria de Administração Regional</h2>
        </div>
        <div class="logout-container">
            <button class="logout-button">Sair</button>
        </div>
    </header>
    <main>
        <!-- Conteúdo principal do seu sistema -->
    </main>
</body>
</html>
