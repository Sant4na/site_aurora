<?php
include('../php/db.php');
include('../php/protect.php');
include('../php/listagem_clientes.php');
?>



<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/lista_clietes.css">
    <title>Listagem de Clientes</title>
</head>

<body>
    <div class="cabecalho">
        <img src="../img/logo.jpg" alt="" />
        <h3>BI Solucions</h3>
        <div class="spacer"></div>
        <h3 class="nome-empresa"><?php echo $_SESSION['nome'] ?></h3>
        <a href="../php/logout.php">Sair</a>
        <h5></h5>
    </div>
    <h1>Listagem de Clientes</h1>
    <div class="table-container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Sexo</th>
                    <th scope="col">Data de Nascimento</th>
                    <th scope="col">cpf</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">...</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while ($user_data = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $user_data['id'] . "<td>";
                        echo "<td>" . $user_data['nome'] . "<td>";
                        echo "<td>" . $user_data['sexo'] . "<td>";
                        echo "<td>" . $user_data['data_nascimento'] . "<td>";
                        echo "<td>" . $user_data['cpf'] . "<td>";
                        echo "<td>" . (isset($user_data['telefone']) ? $user_data['telefone'] : '') . "</td>";
                        echo "<td>Ações<td>";
                        echo "<tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>


</body>

</html>