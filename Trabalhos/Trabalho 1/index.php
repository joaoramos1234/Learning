<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site de nutrição</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <main>
        <div class="user">
            <form action="user_page.php" method="get">
                <h1>Bem-vindo</h1>
                <input type="text" name="user" placeholder="User" required="required">
                <input type="password" name="password" placeholder="Password" required="required">
                <input type="submit" value="Entrar" required="required">
            </form>
        </div>
        <div class="visitante">
            <form action="user_page.php" method="get">
                <h1>Visitante</h1>
                <input type="text" name="idade" placeholder="Idade" required="required">
                <input type="text" name="peso" placeholder="Peso" required="required">
                <input type="text" name="altura" placeholder="Altura" required="required">
                <input type="submit" value="Entrar como Visitante">
            </form>
        </div>
    
    </main>
    
</body>
</html>
