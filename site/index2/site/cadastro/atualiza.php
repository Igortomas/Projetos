<?php
include "conexao.php";
$sql = "UPDATE Cliente SET nome='Oliveira'
WHERE id=1";
if (mysqli_query($conn, $sql)) {
echo "Dados atualizados com sucesso";
} else {
echo "Erro ao atualizar os dados: " .
mysqli_error($conn);
}
mysqli_close($conn);
?>