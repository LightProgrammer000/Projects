<?php

// Criando tabela e cabeçalho de dados [Fixo]
echo "<table border=1>";
echo "<tr>";
echo "<th> ID </th>";// Coluna 1
echo "<th> NOME </th>";// Coluna 1
echo "<th> SOBRENOME </th>";// Coluna 2
echo "<th> SEXO </th>";// Coluna 3
echo "</tr>";

// Conectando ao banco de dados
$conexao = mysqli_connect('127.0.0.1', 'user', '12345', 'banco_teste') or die ('Erro ao conectar ao banco de dados');

// Query
$sql = "select * from cadastro";
$resultado = mysqli_query($conexao, $sql) or die("Erro ao tentar consultar registro");// Obter acesso aos registros

// Obtenha os dados por meio de um loop While [Trazer os dados 1 por 1], guardar os dados em índices associativos;
while ($registro = mysqli_fetch_array($resultado))
{
	$id = $registro['id'];
	$nome = $registro['nome'];// Mesmo nome da coluna na tabela do banco de dados
	$sobrenome = $registro['sobrenome'];// Mesmo nome da coluna na tabela do banco de dados
	$sexo = $registro['sexo'];// Mesmo nome da coluna na tabela do banco de dados

	echo "<tr>";
	echo "<td>" . $id . "</td>";
	echo "<td>" . $nome . "</td>";
	echo "<td>" . $sobrenome . "</td>";
	echo "<td>" . $sexo . "</td>";
	echo "</tr>";	
}

mysqli_close($conexao);
echo "</table>";

echo "<br> <br>";
echo "<button type='button'> <a href ='../HTML/Consultar.html'> Voltar </a> </button>";
?>
