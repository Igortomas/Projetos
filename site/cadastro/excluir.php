<?php
include "conexao.php";
$sql = "DELETE FROM Cliente WHERE id=1";
if (mysqli_query($conn, $sql)) {
echo “Dados deletados com sucesso";
} else {
echo "Erro ao deletar os dados: " .
mysqli_error($conn);
}
mysqli_close($conn);
?>