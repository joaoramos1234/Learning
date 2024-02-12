<?php

$logado = true;
$nome = "João";
$morada = "Entroncamento";
$idade = 19;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 99.1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>

        <h1>Site</h1>

        <?php if(!$logado): ?>
        <nav>
            <a href="#">HOME</a>
            <a href="#">LOGAR</a>
        </nav>
        <?php else: ?>
            <nav>
            <a href="#">HOME</a>
            <a href="#">SERVIÇOS</a>
            <a href="#">PRODUTOS</a>
            <a href="#">CONTACTOS</a>
        </nav>
        <?php endif; ?>

    </header>

        <?php if(!$logado): ?>
            <main>
                <h2>Quem Somos</h2>
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Incidunt quae eligendi libero culpa illum voluptatibus tenetur minus vitae, eaque corrupti saepe molestiae neque beatae fugiat animi consequuntur ut, officiis perferendis!
                </p>
            </main>
        <?php elseif($logado && $idade >= 18): ?>
            <main>
                <h2>Bem-vindo <?= $nome ?></h2>
                <p>
                    Está logado em <?= $morada ?>
                </p>
                <p>
                    Dados de eleitor.
                </p>
            </main>

        <?php else: ?>
            <main>
                <h2>Bem-vindo <?= $nome ?></h2>
                <p>
                    Está logado em <?= $morada ?>
                </p>
                <p>
                    Dados da escola.
                </p>
            </main>
        <?php endif; ?>

    

    <footer>
        Copyright &copy; 2023 João Ramos
    </footer>


    
</body>
</html>