<?php

// Faz a conexão com o banco de dados
$conn = new mysqli("localhost", "root", "", "script");

// Verifica se ocorreu algum erro na conexão
if ($conn->connect_error) {
    die("Erro ao conectar ao banco de dados: " . $conn->connect_error);
}

// Consulta os clientes cadastrados na tabela de vagas individuais
$sql = "SELECT * FROM vagas_individuais";
$resultado = $conn->query($sql);

// Exibe os clientes cadastrados na tabela de vagas individuais
echo "<h2>Clientes com vagas individuais:</h2>";
if ($resultado->num_rows > 0) {
    echo "<table><tr><th>Código</th><th>Nome</th><th>Data de Nascimento</th><th>Tipo da Vaga</th><th>Data de Início</th><th>Data de Fim</th></tr>";
    while ($row = $resultado->fetch_assoc()) {
        echo "<tr><td>" . $row["codigo"] . "</td><td>" . $row["nome"] . "</td><td>" . $row["data_nascimento"] . "</td><td>" . $row["tipo_vaga"] . "</td><td>" . $row["data_inicio"] . "</td><td>" . $row["data_fim"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "Nenhum cliente encontrado.";
}

// Consulta os clientes cadastrados na tabela de vagas de conveniados
$sql = "SELECT * FROM vagas_conveniados";
$resultado = $conn->query($sql);

// Exibe os clientes cadastrados na tabela de vagas de conveniados
echo "<h2>Clientes com vagas de conveniados:</h2>";
if ($resultado->num_rows > 0) {
    echo "<table><tr><th>Código</th><th>Nome</th><th>Data de Nascimento</th><th>Tipo da Vaga</th><th>Data de Início</th><th>Data de Fim</th><th>Nome da Empresa</th></tr>";
    while ($row = $resultado->fetch_assoc()) {
        echo "<tr><td>" . $row["codigo"] . "</td><td>" . $row["nome"] . "</td><td>" . $row["data_nascimento"] . "</td><td>" . $row["tipo_vaga"] . "</td><td>" . $row["data_inicio"] . "</td><td>" . $row["data_fim"] . "</td><td>" . $row["nome_empresa"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "Nenhum cliente encontrado.";
}

// Consulta os clientes cadastrados na tabela de vagas mensais
$sql = "SELECT * FROM vagas_mensais";
$resultado = $conn->query($sql);

// Exibe os clientes cadastrados na tabela de vagas mensais
echo "<h2>Clientes com vagas mensais:</h2>";
if ($resultado->num_rows > 0) {
    echo "<table><tr><th>Código</th><th>Nome</th><th>Data de Nascimento</th><th>Tipo da Vaga</th><th>Data de Início</th><th>Data de Fim</th><th>Valor</th></tr>";
    while ($row = $resultado->fetch_assoc()) {
    echo "<tr><td>" . $row["codigo"] . "</td><td>" . $row["nome"] . "</td><td>" . $row["data_nascimento"] . "</td><td>" . $row["tipo_vaga"] . "</td><td>" . $row["data_inicio"] . "</td><td>" . $row["data_fim"] . "</td><td>" . $row["valor"] . "</td></tr>";
}
echo "</table>";
} else {
echo "Nenhum cliente encontrado.";
}

// Fecha a conexão com o banco de dados
$conn->close();
?>