<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Entrada</h1>
    <form action="saida.php" method="get">

        <input type="text" name="imagem" required="required" placeholder="Imagem">
        <br>
        <input type="text" name="titulo" required="required" placeholder="Titulo">
        <br><br>
        <textarea name="texto" required="required" cols="80" rows="10" placeholder="Texto"></textarea>
        <br>
        <input type="submit" value="Registar">
    </form>
    

</body>
</html>