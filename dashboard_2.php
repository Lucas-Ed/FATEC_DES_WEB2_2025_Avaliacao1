<?php
include 'config.php';

if (!isset($_SESSION['usuario'])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <title>Dashboard</title>
</head>
<body>
    <h2>Bem-vindo, <?php echo $_SESSION['usuario']; ?></h2>

    <?php if ($_SESSION['tipo'] === "bibliotecario") { ?>
        <a href="cadastrar_livro.php">Cadastrar Livros</a>
        <a href="listar_pedidos.php">Listar Pedidos</a>
    <?php } else { ?>
        <a href="cadastrar_pedido.php">Cadastrar Pedido de Livro</a>
    <?php } ?>
    
    <a href="listar_livros.php">Listar Todos os Livros</a>
    <a href="logout.php">Sair</a>
</body>
</html>