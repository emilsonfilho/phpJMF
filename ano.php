<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop com PHP (For e While)</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <style>
        h1 {
            text-align: center;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <h1>Laço FOR</h1>
        <div class="col-lg-4">
            <h1>Dia</h1>
            <select class="form-select">
                <option selected disabled>Selecione um dia</option>
                <?php 
                    for ($i=1; $i <= 31 ; $i++) { 
                        echo "<option>$i</option>";
                    }
                ?>
            </select>
        </div>
        <div class="col-lg-4">
            <h1>Mês</h1>
            <select class="form-select">
                <option selected disabled>Selecione um mês</option>
                <?php 
                for ($i=1; $i<=12; $i++){
                    echo "<option>$i</option>";
                }
                ?>
            </select>
        </div>
        <div class="col-lg-4">
            <h1>Ano</h1>
            <select class="form-select">
                <option selected disabled>Selecione um ano</option>
            <?php 
                for ($i=1980; $i <= 2022 ; $i++) { 
                    echo "<option>$i</option>";
                }
            ?>
            </select>
        </div>
        <h1>Laço WHILE</h1>
        <div class="col-lg-4">
            <h1>Dia</h1>
            <select class="form-select">
                <option selected disabled>Selecione um dia</option>
                <?php 
                $a = 1;
                   while ($a <= 31) {
                       # code...
                       echo "<option>$a</option>";
                       $a++;
                   } 
                ?>
            </select>
        </div>
        <div class="col-lg-4">
            <h1>Mês</h1>
            <select class="form-select">
                <option selected disabled>Selecione um mês</option>
                <?php 
                 $a = 1 ;
                 while ($a <= 12) {
                     echo "<option>$a</option>";
                     $a++;
                 }
                ?>
            </select>
        </div>
        <div class="col-lg-4">
            <h1>Ano</h1>
            <select class="form-select">
                <option selected disabled>Selecione um ano</option>
            <?php 
                $a = 1980;
                while ($a <= 2022) {
                    echo "<option>$a</option>";
                    $a++;
                }
            ?>
            </select>
        </div>
    </div>
</div>
    <script src="jQuery/jquery-3.6.0.min.js"></script>
    <script src="jQuery/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>