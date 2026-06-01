<?php
    include "dados.php";
    $tiposSelecionado = $_POST['tipos'] ?? "" ;
    $saborSelecionado = $_POST['sabor'] ?? "";
    $qtdSelecionada = $_POST['qtd'] ?? "";
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

    <form method ="post">

        <!-- SELECT 1 - Tipo de Produto -->
        <label for="tipos">O que deseja comprar?</label>
        <select id="tipos" name="tipos" onchange="this.form.submit()">
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
                    <option value="<?= $opcao ?>" <?= ($saborSelecionado === $opcao) ? "selected" : "" ?>> <?= $opcao?></option>
                <?php endforeach; ?> 
        </select>
        <?php endif; ?>

        <!-- SELECT 3 - Quantidade -->
        <?php if ($saborSelecionado && isset($quantidade[$tiposSelecionado])): ?>
        <label for="qtd">Escolha a quantidade:</label>
        <select name="qtd" id="qtd" onchange="this.form.submit()">
            <option value="">Selecione...</option>
                <?php foreach ($quantidade [$tiposSelecionado] as $qtd): ?>
                    <option value="<?= $qtd ?>" <?= ($qtdSelecionada === $qtd) ? "selected" : "" ?>><?= $qtd?><?=  ($tiposSelecionado == "bolos") ? "Kg" : " Unidades" ?></option>
                <?php endforeach; ?> 
        </select>
        <?php endif; ?>

    </form>

    <?php 
    if($qtdSelecionada && $saborSelecionado && $tiposSelecionado):
        foreach ($produtos[$tiposSelecionado] as $produto):
            if ($produto["sabor"] === $saborSelecionado):
                $total = $produto["preco"] * (float)$qtdSelecionada
                ?>
                    <h3>Resumo do pedido</h3>
                    <p><strong>Produto:</strong> <?=$produto["sabor"]?> </p>
                    <p><strong>Descrição:</strong> <?=$produto["descricao"]?> </p>
                    <p><strong>Quantidade:</strong> <?= $qtdSelecionada?> <?=  ($tiposSelecionado == "bolos") ? "Kg" : " Unidades" ?></p>
                    <p class="precop"><strong>Preço:</strong> R$ <?= number_format($total, 2, ",",".") ?> </p>
                    <img id="#comidas" src="img/<?= $produto["imagem"] ?>">
                <?php
            endif;
        endforeach;
    endif;
    ?>

</div>

<div class="footer">
    Desenvolvido para aula de PHP – Etec Professor Basilides de godoy.
</div>

</body>
</html>
