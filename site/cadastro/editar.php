<?php

// Aqui você se conecta ao banco
session_start();
include('conexao.php');


// Executa uma consulta 
$sql = "SELECT `user_id`, `user_name` , `user_email` , `user_data` FROM `admin_users`";
$query = $mysqli->query($sql);
while ($dados = $query->fetch_assoc()) {
	$id        = $dados["user_id"];
	$nome      = $dados["user_name"];
	$email = $dados["user_email"];
	$data = $dados["user_data"];
	
	echo "
	<form id=\"form1\" name=\"form1\" method=\"post\" action=\"salvar_edicao.php\">
	<input name=\"id\" type=\"text\" readonly=\"readonly\" id=\"id\" value=\"$id\" size=\"35\"/><br>
	<input name=\"nome\" type=\"text\" id=\"id\" value=\"$nome\" size=\"35\"/><br>
	<input name=\"email\" type=\"text\" id=\"id\" value=\"$email\" size=\"35\"/><br>
	<input name=\"data\" type=\"text\" readonly=\"readonly\" id=\"id\" value=\"$data\" size=\"35\"/><br>
	<input type=\"submit\" onclick=\"return confirm('Deseja mesmo editar esse registro?');\" name=\"Submit\" value=\"SALVAR ALTERAÇÕES\" class=\"btnNew\"/>
	</form>
	";
	
	
}


?>  