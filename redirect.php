<?php
session_start();

// Inicia uma nova sessão ou retoma a sessão existente.
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: index.php");
    exit;
}

// Verifica corretamente se o usuário é "biblio"
if (trim(strtolower($_SESSION['username'])) === 'biblio') {
    header("Location: welcome_b.php");
} elseif  (trim(strtolower($_SESSION['username'])) === 'professor') {
    header("Location: welcome_p.php");
} else {
    header("Location: index.php");
    exit;
}
exit;
?>