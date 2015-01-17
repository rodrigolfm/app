<?php
$bdServidor = 'localhost';
$bdUsuario = 'root';
$bdSenha = '';
$bdBanco = 'gestaodeclientes';

$conexao = mysqli_connect($bdServidor, $bdUsuario, $bdSenha, $bdBanco);

if (mysqli_errno($conexao)) {
	echo "Falha ao conectar com o Banco de Dados ! Verifique os dados !";
	die();
}

function salvar_funcionario($conexao, $funcionario){
	$sqlSalvar = "INSERT INTO clientes 
				( nome, morada, contacto, email, nif, data )
				VALUES (
					'{$funcionario['nome']}',
					'{$funcionario['morada']}',
					'{$funcionario['contacto']}',
					'{$funcionario['email']}',
					'{$funcionario['nif']}',
					'{$funcionario['data']}'
					)";

	mysqli_query($conexao, $sqlSalvar);
}

function buscar_funcionarios($conexao){
	$sqlBuscar = "SELECT * FROM clientes";
	$resultado = mysqli_query($conexao, $sqlBuscar);


	$funcionarios = array();

	while ($funcionario = mysqli_fetch_assoc($resultado)) {
		$funcionarios [] = $funcionario;
	}

	return $funcionarios;
}

function buscar_funcionario($conexao, $id){
	$sqlBusca = 'SELECT * FROM clientes WHERE id = '.$id;
	$resultado = mysqli_query($conexao, $sqlBusca);
	
	return mysqli_fetch_assoc($resultado);
}

function editar_funcionario($conexao, $funcionario){
	$sqlEditar = "UPDATE clientes SET
			nome = '{$funcionario['nome']}',
			morada = '{$funcionario['morada']}',
			contacto = '{$funcionario['contacto']}',
			email = '{$funcionario['email']}',
			nif = '{$funcionario['nif']}',
			data = '{$funcionario['data']}'
				  WHERE id = {$funcionario['id']}";

	mysqli_query($conexao, $sqlEditar);
}

function remover_funcionario($conexao, $id){
	$sqlRemover = "DELETE FROM clientes WHERE id = {$id}";
	
	mysqli_query($conexao, $sqlRemover);
}

?>