<?php
	include 'conexaobd.php';
	
	$exibir_registros = false;
	
	if(isset($_POST['nome']) && $_POST['nome'] != '') {
		$funcionario = array();
		
		$funcionario['id'] = $_GET['id'];
		$funcionario['nome'] = $_POST['nome'];
		
		if(isset($_POST['morada'])) {
			$funcionario['morada'] = $_POST['morada'];
		} else {
			$funcionario['morada'] = '';
		}
		
		if(isset($_POST['contacto'])) {
			$funcionario['contacto'] = $_POST['contacto'];
		} else {
			$funcionario['contacto'] = '';
		}
		
		if(isset($_POST['email'])) {
			$funcionario['email'] = $_POST['email'];
		} else {
			$funcionario['email'] = '';
		}
		
		if(isset($_POST['nif'])) {
			$funcionario['nif'] = $_POST['nif'];
		} else {
			$funcionario['nif'] = '';
		}
		
		if(isset($_POST['data'])) {
			$funcionario['data'] = $_POST['data'];
		} else {
			$funcionario['data'] = '';
		}
		editar_funcionario($conexao, $funcionario);
		header('Location: clientes.php');
		die();
	}
	
	$funcionario = buscar_funcionario($conexao, $_GET['id']);
	
	include 'template_clientes.php';	
?>