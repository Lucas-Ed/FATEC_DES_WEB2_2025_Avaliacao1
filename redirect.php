<?php
session_start(); // Inicia a sessão

// Verifica se o usuário está autenticado
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: index.php");
    exit;
}

// Verifica se a variável de sessão "username" está definida
if (!isset($_SESSION["username"])) {
    header("location: index.php");
    exit;
}

// Redireciona com base no usuário logado
if ($_SESSION["username"] === 'Blibiotecário') {
    header("Location: welcome_b.php");
    exit;
} elseif ($_SESSION["username"] === 'Professor') {
    header("Location: welcome_p.php");
    exit;
} else {
    header("Location: index.php");
    exit;
}
?>