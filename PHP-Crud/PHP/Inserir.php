<?php

// Captura de dados
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$sexo = $_POST['sexo'];

// Conexão
//$conexao = mysqli_connect('192.168.0.152', 'root', '<SENHA>', 'cadastro') or die("Erro ao acessar banco de dados");
$conexao = mysqli_connect('127.0.0.1', 'user', '12345', 'banco_teste') or die("Erro ao acessar banco de dados");

// Query
$sql = "insert into cadastro(nome, sobrenome, sexo) values('$nome', '$sobrenome', '$sexo');";
mysqli_query($conexao, $sql) or die("Erro ao tentar cadastrar registro");

// Encerramento de conexão
mysqli_close($conexao);

echo "Cliente registrado com sucesso !!! <br> <br>";
echo "<button type='button'> <a href ='../HTML/Inserir.html'> Voltar </a> </button>"

?>
