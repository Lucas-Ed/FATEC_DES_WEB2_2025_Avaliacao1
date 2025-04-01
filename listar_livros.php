<?php
include 'config.php';
if (!isset($_SESSION['usuario'])) {
    header("Location: index.php");
    exit();
}

$livros = file("livros.txt", FILE_IGNORE_NEW_LINES);
?>

<h2>Livros Cadastrados</h2>
<ul>
    <?php foreach ($livros as $livro) {
        echo "<li>" . str_replace("|", " - ", $livro) . "</li>";
    } ?>
</ul>
<a href="dashboard.php">Voltar</a>
