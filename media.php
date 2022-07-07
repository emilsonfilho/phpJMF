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
                <h1>««««««« Média »»»»»»</h1>
                <hr>
                <form action="" method="post">
                    <div class="form-group">
                        <label>Nota 1</label>
                        <input type="text" name="n1" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Nota 2</label>
                        <input type="text" name="n2" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Nota 3</label>
                        <input type="text" name="n3" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Nota 4</label>
                        <input type="text" name="n4" class="form-control" required>
                    </div>
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
        $nota1 = $_POST['n1'];
        $nota2 = $_POST['n2'];
        $nota3 = $_POST['n3'];
        $nota4 = $_POST['n4'];

        if ($nota1 == null || $nota2 == null || $nota3 == null || $nota4 == null) {
            echo "Insira valores";
        } else {
            $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;

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
        }

        
        }
    
    ?>
    <script src=""></script>
    <script src=""></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>