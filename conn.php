<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fornellis";

// Cria a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
echo "Conexão bem-sucedida ao banco de dados fornellis";

// Fechar a conexão
$conn->close();
?>