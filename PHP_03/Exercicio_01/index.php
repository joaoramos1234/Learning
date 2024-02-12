<?php 
    $nome = "";
    $cor = "black";

    if(isset($_GET["nome"]) && ($_GET["cor"])){
        $nome = $_GET["nome"];
        $cor = $_GET["cor"];
        $show_div = true;
    }else{

        $show_div = false;
    }

    
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exercicio 97.1</title>
        <link rel="stylesheet" href="style.css">
    </head>
    
    <body style="background-color: <?php echo $cor; ?>;">
        <main>
            <h1>Teste de Formulário</h1>
            <div class="form_css">
                <form action="" id="form">
                    <input type="text" name="nome" placeholder="Nome">
                    <br><br>
                    <input type="text" name="cor" placeholder="Cor em Inglês">
                    <br><br>
                    <input type="submit" value="Enviar" id="input_css">
                </form>
            </div>
            

            <?php if($nome !== "" && $cor !== ""){ ?>
                <div class="second_div">
                    <?php
                        if(isset($_GET["cor"])){
                            echo "<div>Bom dia $nome, vejo que escolheste a cor $cor!</div>";
                        }

                    ?>
                </div>
                <?php } ?>
            
        </main>

    </body>
</html>