<?php
 

// if($_SERVER["REQUEST_METHOD"] == "POST"){
//     session_start(); // Inicia uma nova sessão ou retoma a sessão existente.
//     if($_POST['username'] == 'orlando' and $_POST['password'] == '123mudar'){# pode alteerar esta linha para buscar o usuário no banco de dados.
//         $_SESSION['loggedin'] = TRUE;
//         $_SESSION["username"] = 'Orlando Saraiva';
//          header("location: welcome.php");
//     } else {
//         $_SESSION['loggedin'] = FALSE;
//     }
// }

if($_SERVER["REQUEST_METHOD"] == "POST"){
    session_start(); // Inicia uma nova sessão ou retoma a sessão existente.
    if($_POST['username'] == 'professor' and $_POST['password'] == 'professor'){# pode alteerar esta linha para buscar o usuário no banco de dados.
        $_SESSION['loggedin'] = TRUE;
        $_SESSION["username"] = 'Professor';
         header("location: welcome_p.php");
    } elseif($_POST['username'] == 'biblio' and $_POST['password'] == 'biblio'){
        $_SESSION['loggedin'] = TRUE;
        $_SESSION["username"] = 'Blibiotecário';
         header("location: welcome_b.php");
    }else {
        $_SESSION['loggedin'] = FALSE;
        $erro = "Usuário ou senha inválidos!";
    }
}
?>
 
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Acessar</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
    <Center>
    <div class="wrapper">
    <h2>Biblioteca Fatec Araras</h2>
        <br><br>
        <p> Bem vindo ao sistema de biblioteca da Fatec Araras.</p>
        <br><br>
        <h2>Acessar</h2>
        <p>Favor inserir login e senha.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control" >
                <span class="help-block"></span>
            </div>    
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" >
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Acessar">
            </div>
        </form>
        <?php if (isset($erro)) echo "<p>$erro</p>"; ?>
        <br><br>
        <p>Para logar como professor, use o login: professor e senha: professor</p>
        <br><br>
        <p>Para logar como bibliotecário, use o login: biblio e senha: biblio</p>
    </div>    

    </Center>
</body>
</html>