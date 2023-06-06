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
    justify-content: space-between;
    align-items: center;
}

.project-title {
    font-size: 24px;
    margin: 0;
}

.logout-button {
    background-color: #FF5F6D;
    color: white;
    padding: 10px 20px;
    border-radius: 5px;
    text-decoration: none;
}

.main {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
    padding: 20px;
}

.card {
    background-color: #F0F0F0;
    padding: 20px;
    margin: 20px;
    width: 300px;
    border-radius: 5px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

h2 {
    margin: 0;
}

p {
    margin-top: 10px;
}

</style>
<body>
    <header>
        <h1 class="project-title">Meu Projeto</h1>
        <a href="#" class="logout-button">Sair</a>
    </header>
    <main>
        <div class="card">
            <h2>Card 1</h2>
            <p>Conteúdo do Card 1</p>
        </div>
        <div class="card">
            <h2>Card 2</h2>
            <p>Conteúdo do Card 2</p>
        </div>
        <div class="card">
            <h2>Card 3</h2>
            <p>Conteúdo do Card 3</p>
        </div>
    </main>
</body>
</html>
