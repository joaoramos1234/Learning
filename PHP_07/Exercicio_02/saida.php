<?php

$quantidade;
if(isset($_GET["quantidade"])){
    $quantidade = $_GET["quantidade"];
    if($quantidade <= 0){
        header("Location: index.php");
        exit();
    }
}else{
    header("Location: index.php");
    exit();
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body style="font-family: Gill Sans;">
    <main>
        <h1>ÚLTIMOS LIVROS</h1>
        <br>
        <div class="container">
            <div class="row">
                <?php for($i = 1; $i <= $_GET["quantidade"]; $i++): ?>
                    <div class="col-md-4 mt-4">
                        <div class="card">
                            <img src="<?= random_int(1,5)?>.jpg" class="card-img-top" alt="image">
                            <div class="card-body">
                                <h3 style="color:#d1b724; font-size: 22px; position: relative; left: 38%;">Livro <?php echo $i;?> </h3>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit, totam nobis ad voluptatum aut nemo modi adipisci delectus asperiores recusandae optio consequatur voluptate.</p>
                            </div>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
        </div>

    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>