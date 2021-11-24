<?php
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

echo "Nome: $nome <br>";
echo "preco: $preco <br>";
echo "peso: $peso <br>";
echo "lote: $lote <br>";
echo "categoria: $categoria <br>";
echo "url: $url <br>";
echo "barras: $cod_barra <br>";
echo "fabricação: $data_fabricacao <br>";
echo "validade: $data_validade<br>";
echo "descrição: $descricao<br>";
echo "Acao: $acao<br>";

switch ($acao) {
    case "cadastrar":
        $queryProduto = "insert into produto (nome, preco, peso, lote, categoria, url, descricao, data_fabricacao, data_validade,
                     codigo_barra)
                    values ('$nome', $preco, $peso, $lote, '$categoria', '$url', '$categoria', '$data_fabricacao', '$data_validade', $cod_barra)";
        echo $queryProduto;
        $result = $conn->query($queryProduto);
        echo 'depois';
        var_dump($result);
        if ($result) {
            print "<script>messageSuccess();</script>";
        } else {
            print "<script>messageError();</script>";
        }
        break;
}

?>