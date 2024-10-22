<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
</head>
<body>
    <?php include 'funcoes.php'; ?>
    <form method="POST">
        <label>Primeiro Número: </label>
        <input type="text" name="num1" id="num1"/><br><br>
        <label>Segundo Número: </label>
        <input type="text" name="num2" id="num2"/><br><br>
        

        <button>Calcular
            <?php
                $num1 = $_POST['num1']; //Coletar Dados
                $num2 = $_POST['num2'];
            ?>
        </button><br><br>

        <textarea rows="10" cols="40" readonly fixed>
            <?php
               
                 echo "\n A Soma de " .$num1. "com " .$num2. " é: "  .somar($num1,$num2);
                 echo "\n Subtração de  " .$num1. "com " .$num2. " é: "  .subtrair($num1,$num2);
                 echo "\n A Multiplicação " .$num1. "com " .$num2. " é: "  .multiplicar($num1,$num2);
                 echo "\n A Divisão de  " .$num1. "com " .$num2. " é: "  .dividir($num1,$num2);
                 echo "\n A sequência de números entre ".$num1. " e " .$num2.  " é "  .mostrarNumeros($num1,$num2);
                 echo "\n O Número digitado é ".numeroPositivo($num1);
                 echo "\n A Tabuada do número digitado é ".tabuada($num1);

            ?>
        </textarea>




    <form>
    
</body>
</html>
