<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>

<?php 
// RECEBENDO OS DADOS PREENCHIDOS DO FORMULÁRIO !
$nome	= $_POST ["nome"];	//atribuição do campo "nome" vindo do formulário para variavel	
$email	= $_POST ["email"];	//atribuição do campo "email" vindo do formulário para variavel
$ddd	= $_POST ["ddd"];	//atribuição do campo "ddd" vindo do formulário para variavel
$tel	= $_POST ["telefone"];	//atribuição do campo "telefone" vindo do formulário para variavel
$endereco	= $_POST ["endereco"];	//atribuição do campo "endereco" vindo do formulário para variavel
$cidade	= $_POST ["cidade"];	//atribuição do campo "cidade" vindo do formulário para variavel
$estado	= $_POST ["estado"];	//atribuição do campo "estado" vindo do formulário para variavel
$bairro = $_POST ["bairro"];	//atribuição do campo "bairro" vindo do formulário para variavel
$nivel = $_POST ["nivel"];
$login	= $_POST ["login"];	//atribuição do campo "login" vindo do formulário para variavel
$senha	= $_POST ["senha"];	//atribuição do campo "senha" vindo do formulário para variavel
$news	= $_POST ["news"];	//atribuição do campo "news" vindo do formulário para variavel
$plano	= $_POST ["plano"];	//atribuição do campo "plano" vindo do formulário para variavel
//Gravando no banco de dados !

//conectando com o localhost - mysql
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "site";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
die("Falha na conexão: " . mysqli_connect_error());
} 

// insirir no banco de dados
$sql = "INSERT INTO clientes ( nome , email , plano , ddd , telefone , endereco , cidade , estado , bairro , nivel , login , senha , news , id ) 
VALUES ('$nome', '$email', '$plano', '$ddd', '$tel', '$endereco', '$cidade', '$estado', '$bairro', '$nivel', '$login', '$senha', '$news','' )";

if (mysqli_query($conn, $sql)) {
echo "Dados inseridos com sucesso";
header('Location: refresh.html');
} else {
echo "Erro: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
</body>
</html>
