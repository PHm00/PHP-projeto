<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
</head>
<body>
    <h1> Cálculos </h1>
    <form method="POST">
        <?php
            include 'funcoes.php';//Conectando com o arquivo de funções
        ?>
        <label> Primeiro Número :</label>
        <input type="text" id="num1" name="num1"/><br><br>
 
        <label> Segundo Número :</label>
        <input type="text" id="num2" name="num2"/><br><br>

        <label> Terceiro Número :</label>
        <input type="text" id="num3" name="num3"/><br><br>
 
        <button type="submit"name="action" value="calcular">Calcular</button><br><br>
        <button type="submit"name="action" value="verificarNum1">verificar se o num 1 é par ou Ímpar</button><br><br>
        <button type="submit"name="action" value="verificarNum2">verificar se o num 2 é par ou Ímpar</button><br><br>
        <button type="submit"name="action" value="idadeMaior">Verificar se é Maior de Idade</button><br><br>
        <button type="submit"name="action" value="dobro">Dobro do número digitado</button><br><br>
        <button type="submit"name="action" value="celsius">Converter Celsius para fahrenheit</button><br><br>
        <button type="submit"name="action" value="verificar">Verificar se o Número é positivo negativo ou zero</button><br><br>
        <button type="submit"name="action" value="maiores">Mostrar o maior número dentre os 3 digitados</button><br><br>
        <button type="submit"name="action" value="tabuada1">faz a tabuada do 1 até 10 do número digitado</button><br><br>
        <button type="submit"name="action" value="somaNum">faz a soma de 1 até o número digitado</button><br><br>
        <button type="submit"name="action" value="primo">verifica se o número digitado é primo ou não</button><br><br>
        <button type="submit"name="action" value="palindromos">verifica se a palavra é um palindromo</button><br><br>
        <button type="submit"name="action" value="fatorial">calcula o fatorial do número digitado</button><br><br>
        <button type="submit"name="action" value="pares1">mostra os números pares até o número digitado</button><br><br>
        </button><br><br>
 
        <textarea rows="100" cols="40" readOnly>
            <?php
                if ($_POST){
                    $num1 = $_POST['num1'] ?? '';
                    $num2 = $_POST['num2'] ?? '';
                    $num3 = $_POST['num3'] ?? '';

                    switch ($_POST['action']) {
                        case 'calcular':

                            echo "\nSomar: ".somar($num1,$num2);
                            echo "\nSubtrair: ".subtrair($num1, $num2);
                            echo "\nDividir: ".dividir($num1,$num2);
                            echo "\nMultiplicar: ".multiplicar($num1,$num2);
                            echo "\nEscolher: ".escolher($num1);
                            echo "\nConverter Inteiro para Binário número 1: ".conversaoInteiroBinario($num1);
                            echo "\nConverter Inteiro para Binário número 2: ".conversaoInteiroBinario($num2);
                            echo "\nConverter Decimal para Hexa número 1: ".conversaoDecimalHexa($num1);
                            echo "\nConverter Decimal para Hexa número 2: ".conversaoDecimalHexa($num2);
                            
                            break;

                        case 'verificarNum1' :
                            echo ParImpar($num1);
                            break;

                        case 'verificarNum2' :
                            echo ParImpar($num2);
                            break;
                        case 'idadeMaior' :
                            echo maiorIdade($num1);
                            break;
                        case 'dobro' :
                            echo dobroNum($num1);
                            break;
                        case 'celsius':
                            echo fahrenheit($num1);
                            break;
                        case 'verificar':
                            echo verificarNum($num1);
                            break;  
                        case 'maiores':
                            echo "O maior Número digitado entre os Três $num1, $num2, $num3, é  ".maiorTresNum($num1,$num2,$num3);
                            break;
                        case 'tabuada1':
                            echo tabuada($num1,$num2);
                            break;
                        case 'somaNum':
                            echo somaAte($num1);
                            break;
                        case 'primo':
                            echo verificarPrimo($num1);
                            break;
                        case 'palindromos':
                            echo palindromo($num1);
                            break;
                        case 'fatorial':
                            echo calcularFatorial($num1);
                            break;
                        case 'pares1':
                            echo paresAte($num1);
                            break;
                    
                    }

                }
            ?>
        </textarea>
 
    </form>
</body>
</html>