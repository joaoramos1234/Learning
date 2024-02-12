<?php 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    
    <h1>Produtos</h1>

    <form method="get" action="final.php">
        <h3>Organizar por:</h3>
        <select class="select" name="organizar">
            <option value="id">Id</option>
            <option value="produto">Produto</option>
            <option value="preco">Preço</option>
            <option value="quantidade">Quantidade</option>
        </select>

        <br><br>

        <div class="radio-div">
            <h3>Ordem:</h3>
            <label for="asc" class="radio-label">Ascendente</label>
            <input type="radio" name="direcao" id="asc" value="ASC" checked>
            <br>
            <label for="desc" class="radio-label" >Descendente</label>
            <input type="radio" name="direcao" id="desc" value="DESC" >
        </div>

        <br><br>

        <input class="voltar" type="submit" value="Enviar">
    </form>

     

</body>
</html>