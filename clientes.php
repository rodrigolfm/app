<?php

include "conexaobd.php";

$exibir_registros = true;

if (isset($_POST['nome']) && $_POST['nome']) {
	
	$funcionario = array();

	$funcionario['nome'] = $_POST['nome'];
	$funcionario['morada'] = $_POST['morada'];
	$funcionario['contacto'] = $_POST['contacto'];
	$funcionario['email'] = $_POST['email'];
	$funcionario['nif'] = $_POST['nif'];
	$funcionario['data'] = $_POST['data'];

	salvar_funcionario($conexao, $funcionario);
}

	$lista_funcionarios = buscar_funcionarios($conexao);

	$funcionario = array(
		'id' => 0,
		'nome' => '',
		'morada' => '',
		'contacto' => '',
		'email' => '',
		'nif' => '',
		'data' => '');
	
	include 'template_clientes.php';
?>