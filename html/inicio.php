
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
    <title>Página Inicial</title>
    <link rel="stylesheet" href="../css/inicio_style.css">
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


    <div class="container">
        <div class="card">
            <img src="../img/cliente.png" alt="Clientes">
            <h2 class="titulo_div">Clientes</h2>
            <p class="subtitulo_div">Gerencie, adicione, edite e exclua seus clientes aqui</p>
            <a href="../html/lista_cliente.php" class="btn_avancar"> <img src="../img/btn_avancar.png" alt=""></a>
        </div>


        <div class="card">
            <img src="../img/carrinho.png" alt="Vendas">
            <h2 class="titulo_div">Vendas</h2>
            <p class="subtitulo_div">Lance novas vendas e visualize as suas vendas já existentes</p>
            <a href="#" class="btn_avancar"><img src="../img/btn_avancar.png" alt=""></a>
        </div>


        <div class="card">
            <img src="../img/produtos.png" alt="Produtos">
            <h2 class="titulo_div">Produtos</h2>
            <p class="subtitulo_div">Tenha o controle de seu estoque, adicione produtos e mais</p>

            <a href="#" class="btn_avancar"><img src="../img/btn_avancar.png" alt=""></a>

        </div>


        <div class="card">
            <img src="../img/painel.png" alt="Dashboards">
            <h2 class="titulo_div">Dashboards</h2>
            <p class="subtitulo_div">Analise os insigths do seu negócio</p>

            <a href="#" class="btn_avancar"><img src="../img/btn_avancar.png" alt=""></a>
        </div>
    </div>
</body>

</html>