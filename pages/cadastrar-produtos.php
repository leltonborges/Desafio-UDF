<?php
$id =@$_REQUEST["id"];
$action = @$_REQUEST["action"];

if(isset($id)){
    $queryProdID= "SELECT p.id, p.nome, p.preco, p.peso, p.lote , p.categoria, p.url,
                    p.descricao, p.data_fabricacao, p.data_validade, p.codigo_barra 
                    FROM produto p
                WHERE  p.id = $id";
    if($action == "edit"){
        $result = $conn->query($queryProdID);
        $obj = $result->fetch_object();
    }
}

?>

<nav class="breadcrumb" aria-label="breadcrumbs">
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="?page=cadastrar-produtos-produtos">Cadastro</a></li>
    </ul>
</nav>

<form class="box" method="post" action="?page=salvar-produtos">
    <input type="hidden" name="acao" value="<?php echo isset($id)? "editar" : "cadastrar"?>">
    <?php if(isset($id)) echo "<input type='hidden' name='id' value='$obj->id'>"?>
    <div class="columns">
        <div class="field column">
            <label class="label">Nome do produto</label>
            <div class="control has-icons-left has-icons-right">
                <input class="input" type="text" placeholder="nome do produto" required="required"
                       name="nome" value="<?php if(isset($obj->nome)) echo $obj->nome ?>">
                <span class="icon is-small is-left">
                    <i class="fas fa-file-signature"></i>
                </span>
            </div>
        </div>

        <div class="field column">
            <label class="label">Preço</label>
            <div class="control has-icons-left has-icons-right">
                <input class="input" type="number" step="0.01" placeholder="0.0" required="required"
                       name="preco" value="<?php if(isset($obj->preco)) echo $obj->preco ?>">
                <span class="icon is-small is-left">
                    <i class="fas fa-coins"></i>
                </span>
            </div>
        </div>
    </div>
    <div class="columns">
        <div class="field column">
            <label class="label">Peso líquido</label>
            <div class="control has-icons-left has-icons-right">
                <input class="input" type="number" step="0.01" placeholder="0.0" required="required"
                       name="peso" value="<?php if(isset($obj->peso)) echo $obj->peso ?>">
                <span class="icon is-small is-left">
                    <i class="fas fa-balance-scale"></i>
                </span>
            </div>
        </div>

        <div class="field column">
            <label class="label">Lote</label>
            <div class="control has-icons-left has-icons-right">
                <input class="input" type="number" min="1" placeholder="numero do lote" required="required"
                       name="lote" value="<?php if(isset($obj->lote)) echo $obj->lote ?>">
                <span class="icon is-small is-left">
                    <i class="fas fa-not-equal"></i>
                </span>
            </div>
        </div>

        <div class="field column">
            <label class="label">Categoria do produto</label>
            <div class="control">
                <div class="select">
                    <select required="required" name="categoria">
                        <option>selecione</option>
                        <option value="1" <?php if(isset($obj->categoria) && $obj->categoria == "1") {echo "selected";} ?>>Café da manhã/Padaria</option>
                        <option value="2" <?php if(isset($obj->categoria) && $obj->categoria == "2") {echo "selected";} ?>>Mercearia em geral e enlatados</option>
                        <option value="3" <?php if(isset($obj->categoria) && $obj->categoria == "3") {echo "selected";} ?>>Bebidas</option>
                        <option value="4" <?php if(isset($obj->categoria) && $obj->categoria == "4") {echo "selected";} ?>>Carnes e frios</option>
                        <option value="5" <?php if(isset($obj->categoria) && $obj->categoria == "5") {echo "selected";} ?>>Produtos de limpeza/Utilidades</option>
                        <option value="6" <?php if(isset($obj->categoria) && $obj->categoria == "6") {echo "selected";} ?>>Higiene pessoal</option>
                        <option value="7" <?php if(isset($obj->categoria) && $obj->categoria == "7") {echo "selected";} ?>>Frutas e legumes</option>
                        <option value="8" <?php if(isset($obj->categoria) && $obj->categoria == "8") {echo "selected";} ?>>Pet</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="columns">
        <div class="field column">
            <label class="label">Url do produto</label>
            <div class="control has-icons-left has-icons-right">
                <input class="input" type="text" placeholder="https://examplo.com/image.jpg" required="required"
                       name="url"  value="<?php if(isset($obj->url)) echo $obj->url ?>">
                <span class="icon is-small is-left">
                    <i class="fas fa-link"></i>
                </span>
            </div>
        </div>

        <div class="field column">
            <label class="label">Codigo de barra</label>
            <div class="control has-icons-left has-icons-right">
                <input class="input" type="number" placeholder="0000000000000000000000000000" required="required"
                       name="cod_barra" value="<?php if(isset($obj->codigo_barra)) echo $obj->codigo_barra ?>">
                <span class="icon is-small is-left">
                    <i class="fas fa-barcode"></i>
                </span>
            </div>
        </div>
    </div>
    <div class="columns">
        <div class="field column">
            <label class="label">Data de fabricação</label>
            <div class="control has-icons-left has-icons-right">
                <input class="input" type="date" required="required"
                       name="data_fabricacao" value="<?php if(isset($obj->data_fabricacao)) echo $obj->data_fabricacao ?>">
                <span class="icon is-small is-left">
                    <i class="fas fa-calendar-week"></i>
                </span>
            </div>
        </div>

        <div class="field column">
            <label class="label">Data de validade</label>
            <div class="control has-icons-left has-icons-right">
                <input class="input" type="date" required="required"
                       name="data_validade" value="<?php if(isset($obj->data_validade)) echo $obj->data_validade ?>">
                <span class="icon is-small is-left">
                    <i class="fas fa-calendar-week"></i>
                </span>
            </div>
        </div>
    </div>
    <div class="field">
        <label class="label">Descrição</label>
        <div class="control">
            <textarea class="textarea" placeholder="Textarea" required="required"
                      name="descricao"><?php if(isset($obj->descricao)) echo $obj->descricao ?></textarea>
        </div>
    </div>

    <div class="field">
        <div class="control">
            <div>
                <label class="checkbox">
                    <input type="checkbox" id="checkboxTermos" required="required">
                    Eu concordo com os
                </label><a id="showModal"> Termos e Condições</a>
            </div>
            <div class="modal" id="termos">
                <div class="modal-background"></div>
                <div class="modal-card">
                    <header class="modal-card-head">
                        <p class="modal-card-title">Termos e Condições</p>
                    </header>
                    <section class="modal-card-body">
                        <div class="content">
                            <h1>Hello World</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla accumsan, metus ultrices eleifend gravida, nulla nunc varius lectus, nec rutrum justo nibh eu lectus. Ut vulputate semper dui. Fusce erat odio, sollicitudin vel erat vel, interdum mattis neque.</p>
                            <h2>Second level</h2>
                            <p>Curabitur accumsan turpis pharetra <strong>augue tincidunt</strong> blandit. Quisque condimentum maximus mi, sit amet commodo arcu rutrum id. Proin pretium urna vel cursus venenatis. Suspendisse potenti. Etiam mattis sem rhoncus lacus dapibus facilisis. Donec at dignissim dui. Ut et neque nisl.</p>
                            <ul>
                                <li>In fermentum leo eu lectus mollis, quis dictum mi aliquet.</li>
                                <li>Morbi eu nulla lobortis, lobortis est in, fringilla felis.</li>
                                <li>Aliquam nec felis in sapien venenatis viverra fermentum nec lectus.</li>
                                <li>Ut non enim metus.</li>
                            </ul>
                            <h3>Third level</h3>
                            <p>Quisque ante lacus, malesuada ac auctor vitae, congue <a href="#">non ante</a>. Phasellus lacus ex, semper ac tortor nec, fringilla condimentum orci. Fusce eu rutrum tellus.</p>
                            <ol>
                                <li>Donec blandit a lorem id convallis.</li>
                                <li>Cras gravida arcu at diam gravida gravida.</li>
                                <li>Integer in volutpat libero.</li>
                                <li>Donec a diam tellus.</li>
                                <li>Aenean nec tortor orci.</li>
                                <li>Quisque aliquam cursus urna, non bibendum massa viverra eget.</li>
                                <li>Vivamus maximus ultricies pulvinar.</li>
                            </ol>
                            <blockquote>Ut venenatis, nisl scelerisque sollicitudin fermentum, quam libero hendrerit ipsum, ut blandit est tellus sit amet turpis.</blockquote>
                            <p>Quisque at semper enim, eu hendrerit odio. Etiam auctor nisl et <em>justo sodales</em> elementum. Maecenas ultrices lacus quis neque consectetur, et lobortis nisi molestie.</p>
                            <p>Sed sagittis enim ac tortor maximus rutrum. Nulla facilisi. Donec mattis vulputate risus in luctus. Maecenas vestibulum interdum commodo.</p>
                            <p>Suspendisse egestas sapien non felis placerat elementum. Morbi tortor nisl, suscipit sed mi sit amet, mollis malesuada nulla. Nulla facilisi. Nullam ac erat ante.</p>
                            <h4>Fourth level</h4>
                            <p>Nulla efficitur eleifend nisi, sit amet bibendum sapien fringilla ac. Mauris euismod metus a tellus laoreet, at elementum ex efficitur.</p>
                            <p>Maecenas eleifend sollicitudin dui, faucibus sollicitudin augue cursus non. Ut finibus eleifend arcu ut vehicula. Mauris eu est maximus est porta condimentum in eu justo. Nulla id iaculis sapien.</p>
                            <p>Phasellus porttitor enim id metus volutpat ultricies. Ut nisi nunc, blandit sed dapibus at, vestibulum in felis. Etiam iaculis lorem ac nibh bibendum rhoncus. Nam interdum efficitur ligula sit amet ullamcorper. Etiam tristique, leo vitae porta faucibus, mi lacus laoreet metus, at cursus leo est vel tellus. Sed ac posuere est. Nunc ultricies nunc neque, vitae ultricies ex sodales quis. Aliquam eu nibh in libero accumsan pulvinar. Nullam nec nisl placerat, pretium metus vel, euismod ipsum. Proin tempor cursus nisl vel condimentum. Nam pharetra varius metus non pellentesque.</p>
                            <h5>Fifth level</h5>
                            <p>Aliquam sagittis rhoncus vulputate. Cras non luctus sem, sed tincidunt ligula. Vestibulum at nunc elit. Praesent aliquet ligula mi, in luctus elit volutpat porta. Phasellus molestie diam vel nisi sodales, a eleifend augue laoreet. Sed nec eleifend justo. Nam et sollicitudin odio.</p>
                            <h6>Sixth level</h6>
                            <p>Cras in nibh lacinia, venenatis nisi et, auctor urna. Donec pulvinar lacus sed diam dignissim, ut eleifend eros accumsan. Phasellus non tortor eros. Ut sed rutrum lacus. Etiam purus nunc, scelerisque quis enim vitae, malesuada ultrices turpis. Nunc vitae maximus purus, nec consectetur dui. Suspendisse euismod, elit vel rutrum commodo, ipsum tortor maximus dui, sed varius sapien odio vitae est. Etiam at cursus metus.</p>

                        </div>
                    </section>
                    <footer class="modal-card-foot">
                        <button class="button is-success" id="checkboxAceitaTermos">Aceito</button>
                        <button class="button" id="btnFechaModal">Fechar</button>
                    </footer>
                </div>
            </div>
        </div>
    </div>
    <div class="field is-grouped">
        <div class="control">
            <button class="button is-link" type="submit"><?php echo isset($obj->id)? 'Atualizar': 'Cadastrar' ?></button>
        </div>
        <div class="control">
            <a class="button is-link is-light" href="?page=lista-produtos">Cancelar</a>
        </div>
    </div>
</form>
