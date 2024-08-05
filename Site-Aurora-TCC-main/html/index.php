<?php
include('../php/db.php');
$alertMessage = "Email ou senha Incorretos";

if (isset($_POST['email']) || isset($_POST['senha'])) {


    $email = $conn->real_escape_string($_POST['email']);
    $senha = $conn->real_escape_string($_POST['senha']);

    $sql_code = "SELECT * FROM empresas WHERE email = '$email' AND senha = '$senha'";
    $sql_query = $conn->query($sql_code) or die("Falaha na Execução");
    $quantidade = $sql_query->num_rows;

    if ($quantidade == 1) {
        $usuario = $sql_query->fetch_assoc();

        if (!isset($_SESSION)) {
            session_start();
        }

        $_SESSION['id'] = $usuario['id'];
        $_SESSION['nome'] = $usuario['razao_social'];
        header("Location:  inicio.php");
    } else {
        echo "<script type='text/javascript'>alert('$alertMessage');</script>";
    }
}

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,400;0,500;0,700;0,900;1,100;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Info</title>
</head>

<body>

    <div class="container">
        <form action="" method="post">
            <h1>Entrar na Plataforma de Gestão</h1>
            <div class="input-container">
                <h3>E-mail</h3>
                <input type="email" name="email" required>
                <img width="15" height="15" src="https://img.icons8.com/fluency-systems-regular/48/000000/user--v2.png" alt="user--v2" />
            </div>

            <div class="input-container">
                <h3>Senha</h3>
                <input type="password" name="senha" required>
                <img width="15" height="15" src="https://img.icons8.com/ios/50/000000/lock--v1.png" alt="lock--v1" />
                <a href="#">Esqueci Minha Senha</a>
            </div>

            <button type="submit" class="submit-button">Entrar</button>

        </form>
    </div>

</body>

</html>