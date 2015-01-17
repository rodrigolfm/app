<?php
	include 'conexaobd.php';
	
	remover_funcionario($conexao, $_GET['id']);
	header('Location: clientes.php');

?>