<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    if ($usuario == USER_PROFESSOR && $senha == PASS_PROFESSOR) {
        $_SESSION['usuario'] = $usuario;
        $_SESSION['tipo'] = "professor";
        redirecionarPainel();
    } elseif ($usuario == USER_BIBLIO && $senha == PASS_BIBLIO) {
        $_SESSION['usuario'] = $usuario;
        $_SESSION['tipo'] = "bibliotecario";
        redirecionarPainel();
    } else {
        $erro = "Usuário ou senha inválidos!";
    }
}
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <title>Login - Biblioteca</title>
</head>
<body>
    <h2>Login</h2>
    <form method="POST">
        <input type="text" name="usuario" placeholder="Usuário" required><br>
        <input type="password" name="senha" placeholder="Senha" required><br>
        <button type="submit">Entrar</button>
    </form>
    <?php if (isset($erro)) echo "<p>$erro</p>"; ?>
</body>
</html>
