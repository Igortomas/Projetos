<!DOCTYPE>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<?php
// definições de host, database, usuário e senha
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "site";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
die("Falha na conexão: " . mysqli_connect_error());
} ?>

<body>
<?php
$sql = "SELECT nome, email, sexo, ddd, telefone, endereço, cidade, estado, bairro, país, login, senha, news, id  FROM Cliente";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_assoc($result)) {
echo "id: " . $row["id"] . " - Nome: " . $row["nome"] . " " .
$row["id"] . "<br>";
}
} else {
echo "0 resultados";
}
mysqli_close($conn);
?>

</body>
</html>
<?php
// tira o resultado da busca da memória
mysql_free_result($dados);
?>