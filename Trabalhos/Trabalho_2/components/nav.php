<?php



$current_page = basename($_SERVER['PHP_SELF'], ".php");

?>

<header>
    <h1>SISTEMA DA PAPELARIA <?= date("Y")?></h1>
    <nav>
        <a href="home.php" <?php if ($current_page === 'home') echo 'class="underline"'; ?>>HOME</a>
        <a href="listar_produtos.php" <?php if ($current_page === 'listar_produtos') echo 'class="underline"'; ?>>LISTAR PRODUTOS</a>
        <a href="pesquisar_nome.php" <?php if ($current_page === 'pesquisar_nome') echo 'class="underline"'; ?>>PESQUISAR NOME</a>
        <a href="registar_produto.php" <?php if ($current_page === 'registar_produto') echo 'class="underline"'; ?>>REGISTAR PRODUTOS</a>
        <a href="editar_produto.php" <?php if ($current_page === 'editar_produto') echo 'class="underline"'; ?>>EDITAR PRODUTOS</a>
        <a href="apagar_produto.php" <?php if ($current_page === 'apagar_produto') echo 'class="underline"'; ?>>APAGAR PRODUTO</a>
        <a href="registar_venda.php" <?php if ($current_page === 'registar_venda') echo 'class="underline"'; ?>>REGISTAR VENDA</a>
        <a href="sair.php" <?php if ($current_page === 'index') echo 'class="underline"'; ?>>SAIR</a>
    </nav>
</header>