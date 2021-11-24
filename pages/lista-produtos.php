<nav class="breadcrumb" aria-label="breadcrumbs">
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="?page=lista-produtos">Todos</a></li>
    </ul>
</nav>

<?php
session_start();

function viewMsg($class, $msg)
{
    return
        "<div id='message'>
            <div class='notification $class'>
                $msg
            </div>
        <div>";
}

$mensagem = $_SESSION['mensagem'] ?? '';
session_destroy();

if (isset($mensagem["status"])) {
    if ($mensagem["status"] == "success") {
        echo viewMsg("is-success", $mensagem["msg"]);
    } else if ($mensagem["status"] == "error") {
        echo viewMsg("is-danger", $mensagem["msg"]);
    } else {
        echo viewMsg("is-warning", "Processo inválido");
    }
}

$queryProdutos = "SELECT p.id, p.nome, p.preco, p.lote , p.categoria, p.url, p.descricao, p.data_fabricacao, p.data_validade, p.codigo_barra FROM produto p";
$result = $conn->query($queryProdutos);
?>
<table class="table">
    <thead>
    <tr>
        <th><abbr title="Id">#</abbr></th>
        <th><abbr title="Nome">Nome</abbr></th>
        <th><abbr title="Preco">Preço</abbr></th>
        <th><abbr title="Lote">Lote</abbr></th>
        <th><abbr title="Categoria">Categoria</abbr></th>
        <th><abbr title="Data Fabricação">Data Fabr</abbr></th>
        <th><abbr title="Data Validade">Data Vali</abbr></th>
        <th><abbr title="Descrição">Descrição</abbr></th>
<!--        <th><abbr title="URL">URL</abbr></th>-->
        <th><abbr title="Código de barras">Cód de barras</abbr></th>
        <th><abbr title="URL">Editar</abbr></th>
        <th><abbr title="URL">Deletar</abbr></th>
    </tr>
    </thead>

    <tbody>http://localhost:63342/web-desafio-3-pontos/index.php?page=cadastrar-produtos
    <?php
    while ($obj = $result->fetch_object()){
        echo "<tr>";
        echo "<td>$obj->id</td>";
        echo "<td>$obj->nome</td>";
        echo "<td>$obj->preco</td>";
        echo "<td>$obj->lote</td>";
        echo "<td>$obj->categoria</td>";
        echo "<td>$obj->data_fabricacao</td>";
        echo "<td>$obj->data_validade</td>";
        echo "<td>$obj->descricao</td>";
//        echo "<th>$obj->url</th>";
        echo "<td>$obj->codigo_barra</td>";
        echo "<td>
                <a class='button is-link is-light is-warning'
                  href='?page=cadastrar-produtos&action=edit&id=$obj->id'>
                  <span class='icon is-center'>
                    <i class='fas fa-edit'></i>
                  </span>
                </span>
                </a>
              </td>";
        echo "<td>
                <a class='button is-link is-light is-danger'
                    href='?page=salvar-produtos&action=delete&id=$obj->id'>
                  <span class='icon is-center'>
                    <i class='fas fa-trash-alt'></i>
                  </span>
                </a>
              </td>";
        echo "</tr>";
    }
    ?>
    </tbody>
</table>
