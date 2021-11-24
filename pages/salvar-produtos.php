<?php
session_start();

$id = $_POST["id"];
$nome = $_POST["nome"];
$preco = $_POST["preco"];
$peso = $_POST["peso"];
$lote = $_POST["lote"];
$categoria = $_POST["categoria"];
$url = $_POST["url"];
$cod_barra = $_POST["cod_barra"];
$data_fabricacao = $_POST["data_fabricacao"];
$data_validade = $_POST["data_validade"];
$descricao = $_POST["descricao"];
$acao = $_REQUEST["acao"];

switch ($acao) {
    case "cadastrar":
        $queryProduto = "insert into produto (nome, preco, peso, lote, categoria, url, descricao, data_fabricacao, data_validade,
                     codigo_barra)
                    values ('$nome', $preco, $peso, $lote, $categoria, '$url', '$descricao', '$data_fabricacao', '$data_validade', $cod_barra)";

        $result = $conn->query($queryProduto);

        if ($result) {
            $_SESSION['mensagem'] = [
                'status' => "success",
                'msg' => 'Salvo com sucesso.',
            ];
        } else {
            $_SESSION['mensagem'] = [
                'status' => "error",
                'msg' => 'Error ao salvar.',
            ];

        }
        header('Location: http://' . $_SERVER['HTTP_HOST'] . $_SERVER['SCRIPT_NAME'] . '?page=lista-produtos');
        break;
    case "editar":
        $queryUpdate = "UPDATE desafio.produto
                        SET nome='$nome', preco=$preco, peso=$peso, lote=$lote, categoria=$categoria,
                            url='$url', descricao='$descricao', data_fabricacao='$data_fabricacao', data_validade='$data_validade',
                            codigo_barra=$cod_barra WHERE id=$id";

        $result = $conn->query($queryUpdate);

        if ($result) {
            $_SESSION['mensagem'] = [
                'status' => "success",
                'msg' => 'Atualizado com sucesso.',
            ];
        } else {
            $_SESSION['mensagem'] = [
                'status' => "error",
                'msg' => 'Error ao atualizar.',
            ];

        }
        header('Location: http://' . $_SERVER['HTTP_HOST'] . $_SERVER['SCRIPT_NAME'] . '?page=lista-produtos');
        break;
}
?>

