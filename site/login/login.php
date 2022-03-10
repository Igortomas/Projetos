<?php
session_start();
include('conexao.php');

if(empty($_POST['login']) || empty($_POST['senha'])) {
	header('Location: index.php');
	exit();
}

$login = mysqli_real_escape_string($conexao, $_POST['login']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);


$query = "select login, id, nivel from clientes where login = '{$login}' and senha = '{$senha}'";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

$dados = mysqli_fetch_assoc($result);

//Buscar na tabela usuario o usuário que corresponde com os dados digitado no formulário
		$resultado_usuario = mysqli_query($conexao, $query);
		$resultado = mysqli_fetch_assoc($resultado_usuario);
		
		//Encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
		if(isset($resultado)){
			$_SESSION['usuarioNome'] = $resultado['nome'];
			$_SESSION['nivel'] = $resultado['nivel'];
			$_SESSION['usuarioEmail'] = $resultado['login'];
			if($_SESSION['nivel'] == "0"){
				header("Location: administrativo.php");
			}elseif($_SESSION['nivel'] == "2"){
				header("Location: colaborador.php");
			}else{
				header("Location: cliente.php");
			}
} else {
	$_SESSION['nao_autenticado'] = true;
	header('Location: index.php');
	exit();
}