<?php

session_start(); //recupera a sessão

// Garante que os valores sejam recuperados corretamente

$titulo = $_SESSION["titulo"] ?? "Título não disponível";
$autor =$_SESSION["autor"] ?? "Autor não disponível";
$editora =$_SESSION["editora"] ?? "Editora não disponível";
$isbn =$_SESSION["isbn"] ?? "ISBN não disponível";

// Exibe os dados
echo "<Center><h2>Livro cadastrado com sucesso !!</h2><br></Center>";
echo "<Center>Título: " . htmlspecialchars($titulo) . "<br></Center>";
echo "<Center>Autor: " . htmlspecialchars($autor) . "<br></Center>";
echo "<Center>Editora: " . htmlspecialchars($editora) . "<br></Center>";
echo "<Center>ISBN: " . htmlspecialchars($isbn) . "<br></Center>";
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
    <p>Confira os dados que foram armazenados no arquivo cadastro_livros.txt !!!</p>
    <br><br>
    <p> Para ver livros cadastrados clique no botão abaixo:</p>
    <a href="livros_cadastrados.php" class="btn btn-primary">Ver Livros</a>
    <a href="welcome_b.php" class="btn btn-primary">Voltar</a>
    </Center>
</body>
</html>