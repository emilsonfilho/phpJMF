<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste PHP</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <style>
        .aprovado {
            color: green;
        }
        .reprovado {
            color:red;
        }
        .invalido {
            color: orange;
        }
    </style>
</head>
<body>
    <h1>Olá, Mundo!</h1>
    <!-- Delimitador PHP -->
    <?php 
        /* 
        Inicia o código PHP 
        Comentários de várias linhas
        */
        // $ criação de variável
        $anoAtual = 2022;
        $anoNas = 2009;
        $texto = "Minha idade é ";
        // Comentários de uma única linha em PHP
        echo $anoAtual;
        echo "<br>";
        echo $anoNas;
        echo "<br>";
        echo $texto . ($anoAtual - $anoNas) . "<br><br>";
        echo "<hr>";
        // Operadores Aritméticos
        $n1 =  8;
        $n2 = 7;
        $soma = $n1 + $n2;
        $sub = $n1 - $n2;
        $div = $n1 / $n2;
        $mul = $n1 * $n2;
        echo "O valor de A é: " . $n1 . "<br>"; 
        echo "O valor de B é: " . $n2 . "<br>";
        echo "A soma de A e B é " . $soma;
        echo "<br>A subtração de A e B é " . $sub;
        echo "<br>A multiplicação de A e B é " . $mul;
        #Essa é outra forma ainda de fazer um comentário em PHP
        echo "<hr>";
        $nota1 = 1;
        $nota2 = 3.6;
        $nota3 = 6;
        $nota4 = 10;
        $media = ($nota1 + $nota2 + $nota3 + $nota4) /4;
        // echo "Nota 1=".$nota1. ", 2=" . $nota2 .", 3=" .$nota3. ", 4=".$nota4; 
        echo "Nota 1 = $nota1 <br> Nota 2 = $nota2 <br> Nota 3 = $nota3 <br> Nota 4 = $nota4";
        if ($media > 10) {
            echo "<div class='container'><div class='alert alert-danger' role='alert'>Nota inválida, insira valores menores que 10.</div> </div>";
     }     else if ($media >= 6){   
            echo "<div class='container'><div class='alert alert-success' role='alert'>
            aluno aprovado com média $media</div></div>";
     }
         else if( ($media >= 4) && ($media < 6)) {
           echo "<div class='container'><div class='alert alert-warning' role='alert'>
            Aluno pode refazer a prova com média $media
          </div> </div>";
        } else {
            // echo "<br> O aluno foi reprovado com média ". $media;
            echo "<div class='alert alert-danger' role='alert'>
            Aluno reprovado com média $media
          </div>";
        }
    ?>
</body>
</html>