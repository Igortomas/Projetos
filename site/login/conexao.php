<?php
error_reporting(0);
define('HOST', 'localhost');
define('USUARIO', 'root');
define('SENHA', '');
define('DB', 'site');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');