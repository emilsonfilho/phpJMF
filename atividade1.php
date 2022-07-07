<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Arquiteto</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <style>
        /* #eb4034 */
        .btn {
            color: #eb4034;
            border-color: #eb4034;
        }

        .btn:hover {
            background-color: #eb4034;
            border-color: #eb4034;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div id="div" class="col-lg-4"></div>
            <div class="col-lg-4">  
                <h1>Calculo dos Metros Quadrados</h1>
                <hr>
                <form id="formulario" method="POST" action="">
                    <div class="form-group">
                        <label>Coloque o valor da base</label>
                        <input type="text" name="base" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Coloque o valor da largura:</label>
                        <input type="text" name="larg" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Coloque a altura</label>
                        <input type="text" name="alt" class="form-control">
                    </div>
                    <hr>
                    <button name="btnCalc" type="submit" class="btn btn-outline-info" onclick="click()">Calcular</button>
                    <br>
                    <?php 
                        if(isset($_POST['btnCalc'])){
                            $b = $_POST['base'];
                            $l = $_POST['larg'];
                            $h = $_POST['alt'];
                            
                            $totalParedes = ((($b * $h) * 2) + (($l * $h) * 2));
                            $totalpisoTeto = $l * $b;

                            echo "<p>O piso tem ${totalpisoTeto}m²</p>";
                            echo  "<p>O teto tem ${totalpisoTeto}m²</p>";
                            echo  "<p>A parede tem ${totalParedes}m² </p>";
                        
                            // echo $base;
                            // echo $largura;
                            //  echo $altura;
                        }
                    ?>
                </form>
            </div>
            <div class="col-lg-4"></div>
        </div>
    </div>
</body>
</html>