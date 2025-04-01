<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    if (isset($_POST['titulo']) && isset($_POST['autor']) && isset($_POST['editora']) && isset($_POST['isbn'])) {
        $_SESSION["titulo"] = $_POST['titulo'];
        $_SESSION["autor"] = $_POST['autor'];
        $_SESSION["editora"] = $_POST['editora'];
        $_SESSION["isbn"] = $_POST['isbn'];
        $_SESSION['loggedin'] = TRUE;
        header("location: dados_recebidos.php");

        $arquivo = fopen("cadastro_livros.txt", "a");
        if ($arquivo) {
            $conteudo = "Título: {$_POST['titulo']} | Autor: {$_POST['autor']} | Editora: {$_POST['editora']} | ISBN: {$_POST['isbn']}\n";
            fwrite($arquivo, $conteudo);
            fclose($arquivo);
        }
        exit;
    } else {
        $_SESSION['loggedin'] = FALSE;
        echo "Favor preencher todos os campos.";
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <title>Cadastro de Livros</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f8f9fa;
        }
        .container {
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 100%;
            max-width: 500px;
        }
        .form-group {
            text-align: left;
        }
        input.form-control {
            width: 100%;
            max-width: 400px;
            margin: 0 auto;
        }
        .btn-primary {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            background-color: #007bff;
            border: none;
            transition: 0.3s;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Biblioteca Fatec Araras</h2>
        <h3>Cadastro de Livros</h3>
        <p>Favor inserir os dados.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label>Título do livro</label>
                <input type="text" name="titulo" placeholder="Título" class="form-control" required>
            </div>  
            <div class="form-group">
                <label>Autor</label>
                <input type="text" name="autor" placeholder="Autor" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Editora</label>
                <input type="text" name="editora" placeholder="Editora" class="form-control" required>
            </div>
            <div class="form-group">
                <label>ISBN</label>
                <input type="text" name="isbn" placeholder="ISBN" class="form-control" required>
            </div>
            <input type="submit" class="btn btn-primary" value="Cadastrar">
        </form>
    </div>
</body>
</html>
