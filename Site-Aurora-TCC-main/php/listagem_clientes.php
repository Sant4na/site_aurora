<?php
include('../php/db.php');


$sql = "SELECT clientes.id,clientes.nome,clientes.sexo,clientes.data_nascimento,clientes.cpf, telefones.numero AS telefone FROM clientes LEFT JOIN telefones ON clientes.id = telefones.id_cliente;";

$result = $conn->query($sql);
