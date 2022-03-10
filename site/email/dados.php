<?php
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];
$emailSite = "itrdefender@hotmail.com";
$assuntoEmail = "Contato do WebSite - $nome";
$corpoEmail = "Nome: $nome\n";
$corpoEmail = "E-mail: $email\n";
$corpoEmail = "Telefone: $telefone\n";
$corpoEmail = "Mensagem: $mensagem\n";
$resposta = "Obrigado por entrar em contato, em breve responderemos sua mensagem.";
if($nome != ' ' && $email != ' ' && $mensagem != ' '){
mail($emailSite, $assuntoEmail, $corpoEmail,"From: $email");
mail($email, $assuntoEmail, $resposta,"From: $emailSite");
echo "E-mail enviado com sucesso!";
}else{
echo "Erro ao enviar o e-mail! <br>Os campos nome, e-mail e mensagem são obrigatórios";
}
?>


