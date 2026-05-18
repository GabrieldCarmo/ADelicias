<?php
    include "dados.php";
    $tiposSelecionado = $_POST['tipos'] ?? "" ;
    $saborSelecionado = $_POST['sabor'] ?? "";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Delícias da Dona Maria - Loja Online</title>
    <link href="css/estilos.css" rel="stylesheet">   
</head>

<body>

<header>
    🍰 Delícias da Dona Maria
</header>

<div class="container">
    <h2>Monte seu Pedido</h2>

    <form mothod ="POST">

        <!-- SELECT 1 - Tipo de Produto -->
        <label for="tipo">O que deseja comprar?</label>
        <select id="tipos" name="tipos"  onchange="this.form.submit()">
            <option value="">Selecione...</option>
            <?php foreach ($tipos as $key => $value): ?>
                <option value="<?= $key ?>" <?= ($tiposSelecionado === $key) ? "selected" : "" ?>><?= $value ?> </option>
            <?php endforeach; ?>
        </select>

        <!-- SELECT 2 - Opções do Produto -->
         <?php if ($tiposSelecionado && isset($sabor[$tiposSelecionado])): ?>
        <label for="sabor">Escolha o sabor / tipo:</label>
        <select name="sabor" id="sabor" onchange="this.form.submit()">
            <option value="">Selecione...</option>
                <?php foreach ($sabor [$tiposSelecionado] as $opcao): ?>
                    <option value="<?= $opcao ?>" <?= ($saborSelecionado === $opcao) ? "selected " : "" ?>> <?= $opcao?></option>
                <?php endforeach; ?> 
        </select>
        <?php endif; ?>

        <!-- SELECT 3 - Quantidade -->
        <label for="quantidade">Quantidade:</label>
        <select id="quantidade" name="quantidade">
            <option value="">Selecione...</option>

            <!-- QUANTIDADE EM KG (para bolos) -->
            <option value="1kg">1 Kg</option>
            <option value="2kg">2 Kg</option>
            <option value="3kg">3 Kg</option>
            <option value="4kg">4 Kg</option>
            <option value="5kg">5 Kg</option>

            <!-- QUANTIDADE EM UNIDADES (para salgados e doces) -->
            <option value="50">50 unidades</option>
            <option value="100">100 unidades</option>
            <option value="200">200 unidades</option>
            <option value="300">300 unidades</option>
            <option value="400">400 unidades</option>
            <option value="500">500 unidades</option>
        </select>

    </form>
</div>

<div class="footer">
    Desenvolvido para aula de PHP – Etec Professor Basilides de godoy.
</div>

</body>
</html>
