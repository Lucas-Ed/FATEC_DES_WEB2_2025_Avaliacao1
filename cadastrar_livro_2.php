
<?php
include 'config.php';
verificarLogin("bibliotecario");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Abrindo o arquivo no modo de adição (append)
    $arquivo = fopen("livros.txt", "a");

    if ($arquivo) {
        // Formatando os dados
        $dados = implode("|", [$_POST['titulo'], $_POST['autor'], $_POST['editora'], $_POST['isbn']]) . PHP_EOL;

        // Escrevendo no arquivo
        fwrite($arquivo, $dados);

        // Fechando o arquivo
        fclose($arquivo);

        echo "Livro cadastrado com sucesso!";
    } else {
        echo "Erro ao abrir o arquivo para gravação.";
    }
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