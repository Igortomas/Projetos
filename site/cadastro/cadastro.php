<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>

<?php 
// RECEBENDO OS DADOS PREENCHIDOS DO FORMUL�RIO !
$nome	= $_POST ["nome"];	//atribui��o do campo "nome" vindo do formul�rio para variavel	
$email	= $_POST ["email"];	//atribui��o do campo "email" vindo do formul�rio para variavel
$ddd	= $_POST ["ddd"];	//atribui��o do campo "ddd" vindo do formul�rio para variavel
$tel	= $_POST ["telefone"];	//atribui��o do campo "telefone" vindo do formul�rio para variavel
$endereco	= $_POST ["endereco"];	//atribui��o do campo "endereco" vindo do formul�rio para variavel
$cidade	= $_POST ["cidade"];	//atribui��o do campo "cidade" vindo do formul�rio para variavel
$estado	= $_POST ["estado"];	//atribui��o do campo "estado" vindo do formul�rio para variavel
$bairro = $_POST ["bairro"];	//atribui��o do campo "bairro" vindo do formul�rio para variavel
$nivel = $_POST ["nivel"];
$login	= $_POST ["login"];	//atribui��o do campo "login" vindo do formul�rio para variavel
$senha	= $_POST ["senha"];	//atribui��o do campo "senha" vindo do formul�rio para variavel
$news	= $_POST ["news"];	//atribui��o do campo "news" vindo do formul�rio para variavel
$plano	= $_POST ["plano"];	//atribui��o do campo "plano" vindo do formul�rio para variavel
//Gravando no banco de dados !

//conectando com o localhost - mysql
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "site";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
die("Falha na conex�o: " . mysqli_connect_error());
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
