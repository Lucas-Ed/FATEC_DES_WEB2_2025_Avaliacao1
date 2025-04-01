<?php

session_start(); //recupera a sessão

// Garante que os valores sejam recuperados corretamente

$titulo_p = $_SESSION["titulo"] ?? "Título não disponível";
$autor_p =$_SESSION["autor"] ?? "Autor não disponível";
$editora_p =$_SESSION["editora"] ?? "Editora não disponível";
$isbn_p = $_SESSION["isbn"] ?? "ISBN não disponível";

// Exibe os dados
echo "<Center><h2>Pedido de Livro cadastrado com sucesso !!</h2><br></Center>";
echo "<Center>Título: " . htmlspecialchars($titulo_p) . "<br></Center>";
echo "<Center>Autor: " . htmlspecialchars($autor_p) . "<br></Center>";
echo "<Center>Editora: " . htmlspecialchars($editora_p) . "<br></Center>";
echo "<Center>ISBN: " . htmlspecialchars($isbn_p) . "<br></Center>";
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <title>Livro cadastrado</title>
</head>
<body>
    <Center>
    <br><br>
    <p>Confira todos os pedidos que foram armazenados no arquivo livros.txt !!!</p>
    <br><br>
    <p> Para ver livros cadastrados clique no botão abaixo:</p>
    <a href="livros_cadastrados.php" class="btn btn-primary">Ver Livros</a>
    <br><br>
    <a href="welcome_p.php" class="btn btn-primary">Voltar</a>
    </Center>
</body>
</html>