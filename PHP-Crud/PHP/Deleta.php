<?php

$id = $_POST['identificador'];

// Conectando ao banco de dados
$conexao = mysqli_connect('127.0.0.1', 'user', '12345', 'banco_teste') or die ('Erro ao conectar ao banco de dados');

// Query
$sql = "delete from cadastro where id = '$id'";
$resultado = mysqli_query($conexao, $sql) or die("Erro ao tentar cadastrar registro");// Obter acesso aos registros

mysqli_close($conexao);
echo "Usuário Excluído com sucesso";

echo "<br> <br>";
echo "<button type='button'> <a href ='../HTML/Excluir.html'> Voltar </a> </button>";

?>
