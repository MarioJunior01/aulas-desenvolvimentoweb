<?php 
include ("conexao.php");

$sql = "SELECT * FROM tbUsuario ORDER BY nome_usuario ASC";
$result = $conn->query($sql);

// Verificar se a consulta SELECT retornou dados corretamente
if ($result === false) {
    echo "Erro na consulta SELECT: " . $conn->error;
    exit();
}

$busca = $result->fetch_all(MYSQLI_ASSOC);

$dado = $_POST;
if (!empty($dado)) {
    if (isset($dado["campoNome"]) && isset($dado["campoSobrenome"]) && isset($dado["campoDataNascimento"]) && $dado["tipo"] === "cad") {
        $n = $dado["campoNome"];
        $t = $dado["campoSobrenome"];
        $d = $dado["campoDataNascimento"];

        // Usando prepared statements para inserir dados
        $sqladd = "INSERT INTO tbUsuario (nome_usuario, sobrenome_usuario, data_nascimento_usuario) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sqladd);

        // Verificar se a preparação da consulta foi bem-sucedida
        if ($stmt === false) {
            echo "Erro ao preparar a consulta: " . $conn->error;
            exit();
        }

        // Bind dos parâmetros (tipo 's' para string, 's' para sobrenome e 's' para a data de nascimento)
        $stmt->bind_param("sss", $n, $t, $d);

        // Executar a consulta
        if ($stmt->execute()) {
            header("Location: paginaCadastro.php"); // Redirecionar após sucesso
            exit(); // Garantir que o código pare de rodar após o redirecionamento
        } else {
            echo "Erro ao inserir dados: " . $stmt->error;
        }

        $stmt->close(); // Fechar a declaração preparada
    } else {
        echo "Erro: campos obrigatórios não foram preenchidos.";
    }
}

$conn->close(); // Fechar a conexão com o banco de dados
?>
