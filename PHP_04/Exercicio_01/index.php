<?php

$img1 = "gelo.jpg";
$img2 = "agua.jpg";
$img3 = "vapor.jpg";
$cor = "black";
$temperatura = 0;
$f = 0;
$k = 0;
$image = "";

if(isset($_GET["temperatura"]) && !empty($_GET["temperatura"])){
    $temperatura = $_GET["temperatura"];
    $f = round(($temperatura * 9/5) + 32 , 2);
    $k = round($temperatura + 273.15, 2);


    if($temperatura <= 0){
        $image = $img1;
    }elseif($temperatura <= 100){
        $image = $img2;
    }else{
        $image = $img3;
    }
}

if(isset($_GET["reset"])){
    $temperatura = 0;
    $f = 0;
    $k = 0;
    $image = "";
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio_98.1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <main>
            <h1>Conversor de temperaturas</h1>
            <div class="form_css">
                <form action="" id="form">
                    <input type="text" name="temperatura" placeholder="Celsius">
                    <input type="submit" value="Calcular!" id="input_css">
                    <br><br>
                    <input type="submit" value="Reset" id="input2_css">
                </form>
            </div>   

            <?php if($temperatura !== 0){ ?>
                <div class="second_div">
                    <?php

                    echo "<p>" . round($temperatura, 2) . " °C</p><br>";
                    echo "<p>" . $f . " °F </p><br>";
                    echo "<p>" . $k . " K </p><br>";

                    ?>
                    <?php if(!empty($image)){ ?>

                        <img src="<?php echo $image; ?>" alt="Temp image">

                   <?php } ?>
                </div>
                <?php } ?>
            
        </main>
    
</body>
</html>