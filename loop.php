<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop com PHP (For e While)</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <style>
        p {
            color: red;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <?php 
            // TRÊS ELEMENTO DO FOR
            # $variavel
            # condição
            # incremento
            /*
            for ( ; ; ) {

            }
            */

            //LAÇO DE 1 A 10 COM FOR() {}   
            for ($i=1; $i <= 100 ; $i++) { 
                # echo "<p>Laço</p> <a href='' class='btn btn-outline-success'>$i</a><br>";
            }

            // LAÇO DE 1 A 10 COM WHILE() {}
            $a = 1;

            while ($a <= 10) {
                echo "Laço $a. <br>";
                $a++;
            }
        ?>
    </div>
</div>
    <script src="jQuery/jquery-3.6.0.min.js"></script>
    <script src="jQuery/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>