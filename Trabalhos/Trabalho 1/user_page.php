<?php
require_once("classes/User.php");
require_once("globais.php");

$form = isset($_GET["user"]) && isset($_GET["password"]);
$form = $form || (isset($_GET["idade"]) && isset($_GET["peso"]) && isset($_GET["altura"]));

$username = '';
$password = '';
$peso_ideal_minimo = 0;
$peso_ideal_maximo = 0;
$altura = 0;
$classificacao = "";
$idade = 0;

$erro_login = false;
$loginError = false;

if ($form) {
    if (isset($_GET["user"]) && isset($_GET["password"])) {
        $username = $_GET["user"];
        $password = $_GET["password"];

        $authenticatedUser = null;
        foreach ($users as $u) {
            if ($u->getNome() === $username && $u->getSenha() === $password) {
                $authenticatedUser = $u;
                break;
            }
        }

        if ($authenticatedUser) {
            $user_selecionado = $authenticatedUser;

            $altura = $user_selecionado->getAltura();
            $peso = $user_selecionado->getPeso();
            $peso_ideal_minimo = number_format(18.5 * $altura * $altura, 2);
            $peso_ideal_maximo = number_format(24.9 * $altura * $altura, 2);
            $imc = number_format($peso / ($altura * $altura), 2);
            if ($imc < 18.5) {
                $classificacao = "Abaixo do peso";
            } elseif ($imc >= 18.5 && $imc <= 24.9) {
                $classificacao = "Peso normal";
            } elseif ($imc >= 25 && $imc <= 29.9) {
                $classificacao = "Sobrepeso";
            } elseif ($imc >= 30 && $imc <= 34.9) {
                $classificacao = "Obesidade grau 1";
            } elseif ($imc >= 35 && $imc <= 39.9) {
                $classificacao = "Obesidade grau 2";
            } elseif ($imc >= 40) {
                $classificacao = "Obesidade grau 3 ou Mórbida";
            }

            if ($user_selecionado->getIdade() < 18) {
                $texto_imc = "Entretanto como você possui apenas (" . $user_selecionado->getIdade() . ") anos, estes resultados, como também a tabela abaixo, não estão corretos para si. <br> Deste modo, deves procurar a ajuda de um profissional.";
            } else {
                $texto_imc = "";
            }
        }else {
            $loginError = true; 
        }
    } elseif (isset($_GET["idade"]) && isset($_GET["peso"]) && isset($_GET["altura"])) {
        $altura = $_GET["altura"];
        $peso_ideal_minimo = number_format(18.5 * $altura * $altura, 2);
        $peso_ideal_maximo = number_format(24.9 * $altura * $altura, 2);
        $imc = number_format($_GET["peso"] / ($altura * $altura), 2);
        $idade = $_GET["idade"];
        if ($imc < 18.5) {
            $classificacao = "Abaixo do peso";
        } elseif ($imc <= 24.9) {
            $classificacao = "Peso normal";
        } elseif ($imc <= 29.9) {
            $classificacao = "Sobrepeso";
        } elseif ($imc <= 34.9) {
            $classificacao = "Obesidade grau 1";
        } elseif ($imc <= 39.9) {
            $classificacao = "Obesidade grau 2";
        } else{
            $classificacao = "Obesidade grau 3 ou Mórbida";
        }
    }
}else{
    $erro_login = true;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site de Nutrição</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php if(isset($user_selecionado)): ?>
    <main>
        <div class="content-wrapper">
            <h1>Olá <?= $u->getNome(); ?></h1>
            <p>
                Como você possui (<?= $altura ?> m) de altura, seu peso ideal está entre <br> <span class="verde">(<?= $peso_ideal_minimo ?> kg)</span> e <span class="verde">(<?= $peso_ideal_maximo ?> kg)</span>.
            </p>
            <p>
                Neste momento, com seu peso de <span class="vermelho">(<?= number_format($u->getPeso(), 2)?> kg)</span>, seu IMC é de <span class="vermelho"> (<?= $imc ?>)</span>, sendo assim classificado como... <br>
                <span class="vermelho">(<?= $classificacao ?>)</span>
            </p>
            <p><?= $texto_imc ?></p>

            <table>
                <tr>
                    <th class="td-1 th-css-1">CLASSIFICAÇÃO</th>
                    <th class="th-css-2">IMC</th>
                </tr>
                <tr>
                    <td class="td-1 th-css-2 td-css-1">Abaixo do peso</td>
                    <td class="td-css-1">Abaixo 18,5</td>
                    
                </tr>
                <tr>
                    <td class="td-1 td-css-2">Peso Normal</td>
                    <td class="td-css-2">18,5 - 24,9</td>
                </tr>
                <tr>
                    <td class="td-1 td-css-3">Sobrepeso</td>
                    <td class="td-css-3">25 - 29,9</td>
                </tr>
                <tr>
                    <td class="td-1 td-css-1">Obesidade Grau I</td>
                    <td class="td-css-1">30 - 34,9</td>
                </tr>
                <tr>
                    <td class="td-1 td-css-2">Obesidade Grau II</td>
                    <td class="td-css-2">35 - 39,9</td>
                </tr>
                <tr class="tr-special">
                    <td class="td-special-1 td-1 td-css-3">Obesidade Grau III ou Mórbida</td>
                    <td class="td-special-2 td-css-3">Maior ou Igual a 40</td>
                </tr>
            </table>
            <a href="index.php" class="voltar">Voltar</a>

        </div>
    </main>
    <?php else: ?>
        <main>
            <div class="content-wrapper">
            <?php if (isset($loginError) && $loginError): ?>
                <p class="error">
                    Usuário ou senha inválidos. Por favor, tente novamente.
                    <br><br>
                    <a href="index.php" class="voltar">Voltar</a>
                </p>
            <?php else: ?>
                <h1>Olá Visitante</h1>
                <?php if ($loginError): ?>
                    <p class="error">Usuário ou senha inválidos.</p>
                <?php endif; ?>
                <?php if($form && ($idade >= 18)): ?>
                        <p>
                            Como você possui <span class="vermelho">(<?= $altura ?> m)</span> de altura, seu peso ideal está entre <br>
                            <span class="verde">(<?= $peso_ideal_minimo ?> kg)</span>
                            e <span class="verde">(<?= $peso_ideal_maximo ?> kg)</span>.
                        </p>            
                        <p>
                            Neste momento, com seu peso de <span class="vermelho">(<?= number_format( $_GET["peso"], 2) ?> kg)</span>, seu IMC é de <span class="vermelho">(<?= $imc ?>)</span>, sendo assim classificado como... <br> <span class="vermelho">(<?= $classificacao ?>)</span>
                        </p>
                    <table>
                        <tr>
                            <th class="td-1 th-css-1">CLASSIFICAÇÃO</th>
                            <th class="th-css-2">IMC</th>
                        </tr>
                        <tr>
                            <td class="td-1 th-css-2 td-css-1">Abaixo do peso</td>
                            <td class="td-css-1">Abaixo 18,5</td>
                            
                        </tr>
                        <tr>
                            <td class="td-1 td-css-2">Peso Normal</td>
                            <td class="td-css-2">18,5 - 24,9</td>
                        </tr>
                        <tr>
                            <td class="td-1 td-css-3">Sobrepeso</td>
                            <td class="td-css-3">25 - 29,9</td>
                        </tr>
                        <tr>
                            <td class="td-1 td-css-1">Obesidade Grau I</td>
                            <td class="td-css-1">30 - 34,9</td>
                        </tr>
                        <tr>
                            <td class="td-1 td-css-2">Obesidade Grau II</td>
                            <td class="td-css-2">35 - 39,9</td>
                        </tr>
                        <tr class="tr-special">
                            <td class="td-special-1 td-1 td-css-3">Obesidade Grau III ou Mórbida</td>
                            <td class="td-special-2 td-css-3">Maior ou Igual a 40</td>
                        </tr>
                    </table>
                    <a href="index.php" class="voltar">Voltar</a>
                <?php else: ?>
                        <p>
                            Como você possui <span class="vermelho">(<?= $altura ?> m)</span> de altura, seu peso ideal está entre <br>
                            <span class="verde">(<?= $peso_ideal_minimo ?> kg)</span>
                            e <span class="verde">(<?= $peso_ideal_maximo ?> kg)</span>.
                        </p>            
                        <p>
                            Neste momento, com seu peso de <span class="vermelho">(<?= number_format( $_GET["peso"], 2) ?> kg)</span>, seu IMC é de <span class="vermelho">(<?= $imc ?>)</span>, sendo assim classificado como... <br> <span class="vermelho">(<?= $classificacao ?>)</span>
                        </p>
                        <p>
                            Entretanto, como você possui apenas <span class="vermelho">(<?= $idade ?> anos)</span> estes resultados, como também a tabela abaixo, não estão correctos para si.
                            <br>
                            Deste modo, deves procurar a ajuda de um profissional.
                        </p>
                    <table>
                        <tr>
                            <th class="td-1 th-css-1">CLASSIFICAÇÃO</th>
                            <th class="th-css-2">IMC</th>
                        </tr>
                        <tr>
                            <td class="td-1 th-css-2 td-css-1">Abaixo do peso</td>
                            <td class="td-css-1">Abaixo 18,5</td>
                            
                        </tr>
                        <tr>
                            <td class="td-1 td-css-2">Peso Normal</td>
                            <td class="td-css-2">18,5 - 24,9</td>
                        </tr>
                        <tr>
                            <td class="td-1 td-css-3">Sobrepeso</td>
                            <td class="td-css-3">25 - 29,9</td>
                        </tr>
                        <tr>
                            <td class="td-1 td-css-1">Obesidade Grau I</td>
                            <td class="td-css-1">30 - 34,9</td>
                        </tr>
                        <tr>
                            <td class="td-1 td-css-2">Obesidade Grau II</td>
                            <td class="td-css-2">35 - 39,9</td>
                        </tr>
                        <tr class="tr-special">
                            <td class="td-special-1 td-1 td-css-3">Obesidade Grau III ou Mórbida</td>
                            <td class="td-special-2 td-css-3">Maior ou Igual a 40</td>
                        </tr>
                    </table>
                    <a href="index.php" class="voltar">Voltar</a>
                <?php endif; ?>
            </div>
        </main>
        <?php endif; ?>
    <?php endif; ?>    

</body>
</html>