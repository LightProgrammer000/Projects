<?php

$id = $_POST['identificador'];
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$sexo = $_POST['sexo'];

// Conectando ao banco de dados
$conexao = mysqli_connect('127.0.0.1', 'user', '12345', 'banco_teste') or die ('Erro ao conectar ao banco de dados');

// Query
$sql = "update cadastro set nome = '$nome', sobrenome = '$sobrenome', sexo = '$sexo' where id = '$id'";
$resultado = mysqli_query($conexao, $sql) or die("Erro ao tentar atualizar registro");// Obter acesso aos registros

mysqli_close($conexao);
echo "Usuário Atualizado com sucesso";

echo "<br> <br>";
echo "<button type='button'> <a href ='../HTML/Atualizar.html'> Voltar </a> </button>";

?>
