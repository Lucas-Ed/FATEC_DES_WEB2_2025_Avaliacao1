<?php
session_start();

// Dados de login fixos
define("USER_PROFESSOR", "professor");
define("PASS_PROFESSOR", "professor");

define("USER_BIBLIO", "bibliotecario");
define("PASS_BIBLIO", "bibliotecario");

// Função para verificar login
function verificarLogin($tipo) {
    if (!isset($_SESSION['usuario']) || $_SESSION['tipo'] !== $tipo) {
        header("Location: index.php");
        exit();
    }
}

// Função para redirecionar usuários conforme o tipo
function redirecionarPainel() {
    if ($_SESSION['tipo'] === "professor") {
        header("Location: dashboard.php");
    } elseif ($_SESSION['tipo'] === "bibliotecario") {
        header("Location: dashboard.php");
    }
}
?>