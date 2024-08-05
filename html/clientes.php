<?php
include('../php/db.php');
include('../php/protect.php');
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/clientes.css">
    <title>Formulário de Cadastro</title>

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

<a href="">teste1</a>
<a href="">teste2</a>

    <h1>Cadastro de Clientes</h1>

    <form id="formulario" class="form">
    <div class="linha">
        <div>
            <label for="nome">Nome:</label>
            <input type="text" id="nome" class="nome-input" name="nome" minlength="4" required>
        </div>

        <div>
            <label for="sexo">Sexo:</label>
            <select id="sexo" class="sexo-input" name="sexo" required>
                <option value="M">Masculino</option>
                <option value="F">Feminino</option>
            </select>
        </div>
    </div>

    <div class="linha unica">
        <div>
            <label for="data-nascimento">Data de Nascimento:</label>
            <input type="date" id="data-nascimento" class="data-nascimento-input" name="data-nascimento" oninput="validarData()" required>
            <p class="result" id="resultado-data"></p>
        </div>
    </div>

    <div class="linha">
        <div>
            <label for="cpf">CPF:</label>
            <input type="text" id="cpf" class="cpf-input" name="cpf" maxlength="11" oninput="validarCPF()" required>
            <p class="result" id="resultado"></p>
        </div>

        <div>
            <label for="telefone">Telefone:</label>
            <input type="text" id="telefone" class="telefone-input" name="telefone" maxlength="11" oninput="validarTelefone()" required>
            <p class="result" id="resultadofone"></p>
        </div>
    </div>

    <div>
        <button type="submit">Enviar</button>
    </div>
</form>




    </form>
    <script src="../js/validaCPF.js"></script>
    <script src="../js/validaFONE.js"></script>
    <script src="../js/validaNOME.js"></script>
    <script src="../js/validaDATA.js"></script>
    <script src="../js/ValidaEnvio.js"></script>

</body>

</html>