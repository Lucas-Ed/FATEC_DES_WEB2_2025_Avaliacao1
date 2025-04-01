<?php
include 'config.php';
verificarLogin("bibliotecario");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dados = implode("|", [$_POST['titulo'], $_POST['autor'], $_POST['editora'], $_POST['isbn']]) . PHP_EOL;
    file_put_contents("livros.txt", $dados, FILE_APPEND);
    echo "Livro cadastrado com sucesso!";
}
?>

<form method="POST">
    <input type="text" name="titulo" placeholder="Título" required><br>
    <input type="text" name="autor" placeholder="Autor" required><br>
    <input type="text" name="editora" placeholder="Editora" required><br>
    <input type="text" name="isbn" placeholder="ISBN" required><br>
    <button type="submit">Cadastrar</button>
</form>
<a href="dashboard.php">Voltar</a>