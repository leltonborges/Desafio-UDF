<h2 class="subtitle">Os ultimos 10 produtos cadastrados</h2>
<?php
$queryLast10 = "SELECT p.id, p.nome, p.preco, p.peso, p.lote , p.categoria, p.url, 
                p.descricao, p.data_fabricacao, p.data_validade, p.codigo_barra 
                FROM produto as p 
                order by p.id desc limit 10";
$result = $conn->query($queryLast10);

echo "<div class='columns is-flex-wrap-wrap is-flex-direction-row'>";
while ($obj = $result->fetch_object()) {
    ?>
    <div class="card column">
        <div class="card-image">
            <figure class="image is-1by1">
                <img src="<?php echo $obj->url; ?>" alt="<?php echo $obj->nome; ?>">
            </figure>
        </div>
        <div class="card-content">
            <div class="media">
                <div class="media-content">
                    <p class="title is-4"><?php echo $obj->nome; ?></p>
                    <p class="subtitle is-6">R$ <?php echo $obj->preco; ?></p>
                </div>
            </div>

            <div class="content">
                <?php echo $obj->descricao; ?>
                <br>
                <time datetime="<?php $obj->data_fabricacao ?>">Fabricação: <?php echo $obj->data_fabricacao; ?></time>
                <time datetime="<?php $obj->data_validade ?>">Validade: <?php echo $obj->data_validade; ?></time>
            </div>
        </div>
    </div>
    <?php
}
?>
</div>
