<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média com PHP</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
   
</head>
<body>
<div class="container">
        <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-4">  
                <h1> Calculando o IMC </h1>
                <hr>
                <form action="" method="post">
                    <div class="form-group">
                        <label>Peso (kg)</label>
                        <input type="text" name="kg" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Altura (em metros)</label>
                        <input type="text" name="altura" class="form-control" required>
                    </div>
                    <!--
                    <div class="form-group">
                        <label>IMC:</label>
                        <input type="text" class="form-control" disabled name="imc">
                    </div>
                    -->
                    <hr>
                    <button type="submit" class="btn btn-success" name="btnCalc">Calcular</button>
                </form>
            </div>
            <div class="col-lg-4"></div>
        </div>
    </div>
   
    <!-- Delimitador PHP -->
    <?php 
        #Condição se existir um click no botão bnCalc
        #isset verifica se existe ação
        if(isset($_POST['btnCalc'])){
         // Post = +seguro(oculta dados enviados) , lento
        // Get = -seguro(miostra ios dados enviados pela URL), +rápido
        // $_POST identifica o tipo de dados enviados pelo input.

        echo "<hr>";
        $peso = $_POST['kg'];
        $altura = $_POST['altura'];

        if ($peso != null && $altura != null) {
            $valor = $peso / ($altura ** 2);
            $imc = number_format($valor, 2, ",", ".");
            echo "O IMC é $imc";

            if($imc < 17){
                echo '<div class="container"><div class="alert alert-secondary" role="alert">Magro</div></div>';
              } else if (($imc >= 17) && ($imc < 25)) {
                 echo '<div class="alert alert-success" role="alert">Normal</div>';
              } else if (($imc >= 25) && ($imc < 30)) {
                 echo '<div class="alert alert-warning" role="alert">Sobrepeso</div>';
              } else if (($imc>=30)&&($imc<35)){
                 echo '<div class="alert alert-warning" role="alert">Obesidade Grau I</div>';
              } else if(($imc>=35)&&($imc<40)){
                 echo '<div class="alert alert-danger" role="alert">Obesidade Grau II</div>';
              } else {
                 echo '<div class="alert alert-danger" role="alert">Obesidade Grau III</div>';
              }
        }
        
        }
    
    ?>
    <script src=""></script>
    <script src=""></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>