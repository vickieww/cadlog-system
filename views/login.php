<!DOCTYPE html>
<html lang="pt-br">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrar</title>
    <link rel="stylesheet" href="/style.css">
    <style>
     
body {
    background-color: #FDDDE6;
    font-family: Arial, sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

form {
    background-color: white;
    padding: 18px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

input[type="email"], input[type="password"] {
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

button {
    width: 100%;
    background-color: #6A0DAD;
    color: white;
    border: none;
    padding: 10px;
    border-radius: 5px;
    cursor: pointer;
}

button:hover {
    background-color: #5D0596;
}

a {
    display: block;
    text-align: center;
    margin-top: 10px;
    color: #6A0DAD;
    text-decoration: none;
}


    </style>
</head>
 
<body>
    <!-- O formulário usa o método POST para enviar dados de forma segura -->
    <!-- Os dados serão enviados para 'index.php' com a ação 'login' -->
     <main>
    <form method="post" action="index.php?action=login">
        <label for="email">E-mail</label></br>
        <input type="email" name="email" placeholder="Email" required><br>
        <label for="senha">Senha</label></br>
        <input type="password" name="senha" placeholder="Senha" required><br>
        <button type="submit">Login</button>
    </form>
    <!-- Define o destino do link e leva à opção de cadastro -->
    <a href="index.php?action=register">Cadastrar-se</a>
</main>
</body>
 
</html>