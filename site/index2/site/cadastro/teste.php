<?php
include("conexao.php"); // caminho do seu arquivo de conexão ao banco de dados
$sql = "SELECT * FROM Cliente";
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Tutorial</title>
</head>
<body>
  <table border="1">
    <tr>
      <td>Código</td>
      <td>Nome</td>
      <td>E-mail</td>
      <td>Data de Cadastro</td>
      <td>Ação</td>
    </tr>
    <?php $dados["id"] . "<br>"; ?>
	<?php $dados["nome"] . "<br>"; ?>
	<?php $dados["email"] . "<br>"; ?>
	<?php $dados["telefone"] . "<br>"; ?>
	
    <tr>
      <td><?php echo $dados['id']; ?></td>
      <td><?php echo $dados['nome']; ?></td>
      <td><?php echo $dados['email']; ?></td>
	  <td><?php echo $dados['telefone']; ?></td>

      <td>
        <a href="usu_editar.php?codigo=<?php echo $dado['usu_codigo']; ?>">Editar</a>
        <a href="usu_excluir.php?codigo=<?php echo $dado['usu_codigo']; ?>">Excluir</a>
      </td>
    </tr>
  </table>
</body>
</html>